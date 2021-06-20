<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\configModel;
use App\Models\jenisTestModel;
use App\Models\bidangTestModel;
use App\Models\subBidangTestModel;
use App\Models\unitKerjaModel;
use CodeIgniter\HTTP\Request;

class Config extends BaseController
{
    protected $dataConfig;

    public function __construct()
    {
        $this->dataConfig = new configModel();
        $this->dataJenisTest = new jenisTestModel();
        $this->dataBidangTest = new bidangTestModel();
        $this->dataSubBidangTest = new subBidangTestModel();
        $this->dataUnitKerja = new unitKerjaModel();
    }

    public function config()
	{
        
        $currentPage = $this->request->getVar('page_config') ? $this->request->getVar('page_config') : 1;

        $d_config = $this->dataConfig->getConfig();

        $data = [
            'title' => 'CAT | Data Config',
            'currentPage' => $currentPage,
            'config' => $d_config
        ];

        echo view('pages/config/config',$data);
        
    }

    public function createConfig()
    {

        $jenisTest = $this->dataJenisTest->getJenisTest();
        $bidangTest = $this->dataBidangTest->getIdBidangTest();
        $subBidangTest = $this->dataSubBidangTest->getSubBidangTest();
        $unitKerja = $this->dataUnitKerja->getUnitKerja();

        $data = [
            'title' => 'Form Create Config',
            'validation' => \Config\Services::validation(),
            'jenisTest' => $jenisTest,
            'bidangTest' => $bidangTest,
            'subBidangTest' => $subBidangTest,
            'unitKerja' => $unitKerja
        ];

    if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/config/createConfig',$data);
        
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
            'jumlah_soal' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'waktu_ujian' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'kode_test' => [
                'rules' => 'required|is_unique[config.kode_test]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada'
                ]
                ] 
        ])){

            return redirect()->to('createConfig')->withInput();
        }

    if(in_groups('Administrator') || in_groups('Operator')) :
   
        $this->dataConfig->save([
            'jumlah_soal' => $this->request->getVar('jumlah_soal'),
            'waktu_ujian' => $this->request->getVar('waktu_ujian'),
            'kode_test' => $this->request->getVar('kode_test'),
            'id_bidang_test' => $this->request->getVar('id_bidang_test'),
            'id_sub_bidang_test' => $this->request->getVar('id_sub_bidang_test'),
            'id_unit_kerja' => $this->request->getVar('id_unit_kerja')
        ]);

        session()->setFlashData('Pesan','Config Berhasil di Tambah');

        return redirect()->to('/Config/config');
        
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

        $this->dataConfig->where('id', $id)->delete();
        session()->setFlashData('Pesan','Config Berhasil di Hapus');
        return redirect()->to('/Config/config');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;
    }

	//--------------------------------------------------------------------

}
