<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\soalModel;
use App\Models\JenisTestModel;
use App\Models\bidangTestModel;
use App\Models\subBidangTestModel;
use App\Models\unitKerjaModel;

use CodeIgniter\HTTP\Request;

class Soal extends BaseController
{
    protected $dataSoal;
    protected $dataJenisTest;
    protected $dataBidangTest;
    protected $dataSubBidangTest;
    protected $dataUnitKerja;

    public function __construct()
    {
        $this->dataSoal = new soalModel();
        $this->dataJenisTest = new JenisTestModel();
        $this->dataBidangTest = new bidangTestModel();
        $this->dataSubBidangTest = new subBidangTestModel();
        $this->dataUnitKerja = new unitKerjaModel();

    }
    public function soal()
	{

        $currentPage = $this->request->getVar('page_soal') ? $this->request->getVar('page_soal') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $idUnitKerjaBy = $this->dataSoal->cariBedasarkan($keyword);
        } else{
            $idUnitKerjaBy = $this->dataSoal;
        }

        $idUnitKerjaBy = $idUnitKerjaBy->paginate(20,'soal');
        $d_pager   = $this->dataSoal->pager;

        $soal = $this->dataSoal->getSoal();

        $data = [
            'title' => 'Data Soal',
            'idUnitKerjaBy' => $idUnitKerjaBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'soal' => $soal
        ];

        echo view('pages/soal/soal',$data);
    }

    public function createSoal()
    {

        $jenisTest = $this->dataJenisTest->getJenisTest();
        $bidangTest = $this->dataBidangTest->getIdBidangTest();
        $subBidangTest = $this->dataSubBidangTest->getSubBidangTest();
        $unitKerja = $this->dataUnitKerja->getUnitKerja();

        $data = [
            'title' => 'Form Create Soal',
            'validation' => \Config\Services::validation(),
            'jenisTest' => $jenisTest,
            'bidangTest' => $bidangTest,
            'subBidangTest' => $subBidangTest,
            'unitKerja' => $unitKerja
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :        
        return view('pages/soal/createSoal',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function save(){

        $JenisTest = $this->request->getVar('kode_test');
        //pecah string berdasarkan string "," 
        $idJenisTest = explode("-", $JenisTest);
        //mencari element array 0
        $idJenisTest = $idJenisTest[0];
        //tampilkan hasil pemecahan

        $BidangTest = $this->request->getVar('id_bidang_test');
        //pecah string berdasarkan string "," 
        $idBidangTest = explode("-", $BidangTest);
        //mencari element array 0
        $idBidangTest = $idBidangTest[0];
        //tampilkan hasil pemecahan

        $subBidangTest = $this->request->getVar('id_sub_bidang_test');
        //pecah string berdasarkan string "," 
        $idSubBidangTest = explode("-", $subBidangTest);
        //mencari element array 0
        $idSubBidangTest = $idSubBidangTest[0];
        //tampilkan hasil pemecahan

        $UnitKerja = $this->request->getVar('id_unit_kerja');
        //pecah string berdasarkan string "," 
        $idUnitKerja = explode("-", $UnitKerja);
        //mencari element array 0
        $idUnitKerja = $idUnitKerja[0];
        //tampilkan hasil pemecahan

        //validasi inputan
        if (!$this->validate([
            'soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'jawaban' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'jenis_soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'point_soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],    
                'jawaban_benar' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required'=> '{field} harus di isi',
                    ]
                    ]        
        ])){

            return redirect()->to('createSoal')->withInput();
        }

        $countJawaban = count($this->request->getVar('jawaban[]'));
        $countJawabanBenar = count($this->request->getVar('jawaban_benar[]'));

        for ($i = 0; $i < $countJawaban; $i++){
            
            $jawaban = $this->request->getVar('jawaban['.$i.']');

            $tambahanKumplit[] = $jawaban.";";
                
        }

        for ($i = 0; $i < $countJawabanBenar; $i++){
            $jawabanBenar = $this->request->getVar('jawaban_benar['.$i.']');
            $pointSoal = $this->request->getVar('point_soal['.$i.']');

            $tambahanKumplitBenar[] = $jawabanBenar.";";
            $tambahanKumplitPoint[] = $pointSoal.";";
            
        }

        $detailNilaiTambah = implode("",$tambahanKumplit);
        $detailNilaiTambahBenar = implode("",$tambahanKumplitBenar);
        $detailNilaiTambahPoint = implode("",$tambahanKumplitPoint);

        $detailNilaiMax = explode(";", substr($detailNilaiTambahPoint, 0, -1));
        //mencari element array 0
        $detailNilaiMax = $detailNilaiMax;        
        
        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataSoal->save([
            'soal' => $this->request->getVar('soal'),
            'jawaban' => substr($detailNilaiTambah, 0, -1),
            'jenis_soal' => $this->request->getVar('jenis_soal'),
            'point_soal' => substr($detailNilaiTambahPoint, 0, -1),
            'point_max' => max($detailNilaiMax),
            'jawaban_benar' => substr($detailNilaiTambahBenar, 0, -1),
            'kode_test' => $idJenisTest,
            'id_bidang_test' => $idBidangTest,
            'id_sub_bidang_test' => $idSubBidangTest,
            'id_unit_kerja' => $idUnitKerja,

        ]);

        session()->setFlashData('Pesan','Soal Berhasil di Tambah');

        return redirect()->to('/Soal/soal');
        else :
            $data = [
                'title' => 'Save'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function delete($id)
    {
        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataSoal->where('id', $id)->delete();
        session()->setFlashData('Pesan','Soal Berhasil di Hapus');
        return redirect()->to('/Soal/soal');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function edit($id)
    {

        $jenitTest = $this->dataJenisTest->getJenisTest();
        $bidangTest = $this->dataBidangTest->getIdBidangTest();
        $subBidangTest = $this->dataSubBidangTest->getSubBidangTest();
        $unitKerja = $this->dataUnitKerja->getUnitKerja();

        $data = [
            'title' => 'Form Edit Soal',
            'validation' => \Config\Services::validation(),
            'soal' => $this->dataSoal->getSoal($id),
            'jenisTest' => $jenitTest,
            'bidangTest' => $bidangTest,
            'subBidangTest' => $subBidangTest,
            'unitKerja' => $unitKerja
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/soal/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function ubah($id)
    {

        $JenisTest = $this->request->getVar('kode_test');
        //pecah string berdasarkan string "," 
        $idJenisTest = explode("-", $JenisTest);
        //mencari element array 0
        $idJenisTest = $idJenisTest[0];
        //tampilkan hasil pemecahan
        
        $BidangTest = $this->request->getVar('id_bidang_test');
        //pecah string berdasarkan string "," 
        $idBidangTest = explode("-", $BidangTest);
        //mencari element array 0
        $idBidangTest = $idBidangTest[0];
        //tampilkan hasil pemecahan

        $subBidangTest = $this->request->getVar('id_sub_bidang_test');
        //pecah string berdasarkan string "," 
        $idSubBidangTest = explode("-", $subBidangTest);
        //mencari element array 0
        $idSubBidangTest = $idSubBidangTest[0];
        //tampilkan hasil pemecahan

        $UnitKerja = $this->request->getVar('id_unit_kerja');
        //pecah string berdasarkan string "," 
        $idUnitKerja = explode("-", $UnitKerja);
        //mencari element array 0
        $idUnitKerja = $idUnitKerja[0];
        //tampilkan hasil pemecahan

        //validasi inputan
        if (!$this->validate([
            'soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'jenis_soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'point_soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],    
                'jawaban_benar' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required'=> '{field} harus di isi',
                    ]
                    ]        
        ])){

            return redirect()->to('/Soal/edit/'. $id)->withInput();
        }

        if(in_groups('Administrator') || in_groups('Operator')) :
            
            $detailNilaiMax = explode(";", $this->request->getVar('point_soal'));
            //mencari element array 0
            $detailNilaiMax = $detailNilaiMax;    

            $this->dataSoal->save([
            'id' => $this->request->getVar('id'),
            'soal ' => $this->request->getVar('soal '),
            'jawaban' => $this->request->getVar('jawaban'),
            'jenis_soal' => $this->request->getVar('jenis_soal'),
            'point_soal' => $this->request->getVar('point_soal'),
            'point_max' => max($detailNilaiMax),
            'jawaban_benar' => $this->request->getVar('jawaban_benar'),
            'kode_test' => $idJenisTest,
            'id_bidang_test' => $idBidangTest,
            'id_sub_bidang_test' => $idSubBidangTest,
            'id_unit_kerja' => $idUnitKerja

        ]);
        
        session()->setFlashData('Pesan','Soal Berhasil di Ubah');

        return redirect()->to('/Soal/soal');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }



	//--------------------------------------------------------------------

}
