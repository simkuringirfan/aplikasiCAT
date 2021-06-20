<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\subBidangTestModel;
use App\Models\bidangTestModel;
use App\Models\registrasiUjianModel;
use App\Models\jenisTestModel;
use App\Models\unitKerjaModel;
use App\Models\configModel;
use CodeIgniter\HTTP\Request;

class RegistrasiUjian extends BaseController
{
    protected $datasubBidangTest;
    protected $dataBidangTest;
    protected $dataRegistrasiUjian;
    protected $dataJenisTest;
    protected $dataUnitKerja;
    protected $dataConfig;

    public function __construct()
    {
        $this->datasubBidangTest = new subBidangTestModel();
        $this->dataBidangTest = new bidangTestModel();
        $this->dataRegistrasiUjian = new registrasiUjianModel();
        $this->dataJenisTest = new jenisTestModel();
        $this->dataUnitKerja = new unitKerjaModel();
        $this->dataConfig = new configModel();
 
    }
    public function registrasiUjian()
	{

        $currentPage = $this->request->getVar('page_registrasi_ujian') ? $this->request->getVar('page_registrasi_ujian') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_registrasiUjianBy = $this->dataRegistrasiUjian->cariBedasarkan($keyword);
        } else{
            $d_registrasiUjianBy = $this->dataRegistrasiUjian;
        }

        $d_registrasiUjianBy = $d_registrasiUjianBy->paginate(20,'registrasi_ujian');
        $d_pager   = $this->dataRegistrasiUjian->pager;

        $d_registrasiUjian = $this->dataRegistrasiUjian->getRegistrasiUjian();

        $data = [
            'title' => 'Data Registrasi Ujian',
            'registrasiUjianBy' => $d_registrasiUjianBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'registrasiUjian' => $d_registrasiUjian
        ];

        echo view('pages/registrasiUjian/registrasiUjian',$data);
    }

    public function createRegistrasiUjian()
    {

        // $keyword = $this->request->getVar('id_bidang_test');
        // if ($keyword){
        //     $dBidangTestBy = $this->dataBidangTest->getBidangTest($keyword);
        // } else{
        //     $dBidangTestBy = $this->dataBidangTest;
        // }

        $bidangTest = $this->dataBidangTest->getIdBidangTest();
        $subBidangTest = $this->datasubBidangTest->getSubBidangTest();
        $jenisTest = $this->dataJenisTest->getJenisTest();
        $unitKerja = $this->dataUnitKerja->getUnitKerja();
        
        $data = [
            'title' => 'Form Create Registrasi Ujian',
            'validation' => \Config\Services::validation(),
            'bidangTest' => $bidangTest,
            'subBidangTest' => $subBidangTest,
            'jenisTest' => $jenisTest,
            'unitKerja' => $unitKerja
        ];

        return view('pages/registrasiUjian/createRegistrasiUjian',$data);
    }

    function bidangTest()
    {
        $dBidangTestBy=$this->request->getPost('id_bidang_test');
        $data=$this->dataBidangTest->getBidangTest($dBidangTestBy);
        echo json_encode($data);
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            'no_reg_ujian' => [
                'rules' => 'required|is_unique[registrasi_ujian.no_reg_ujian]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> 'Silahkan ulangi klik tombol registrasi'
                ]
                ],
            'nik' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'nip' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'nama_peserta' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'pin_reg' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'kode_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'jenis_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'id_bidang_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'bidang_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'id_sub_bidang_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'sub_bidang_test' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'id_unit_kerja' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ]                     
        ])){

            return redirect()->to('createRegistrasiUjian')->withInput();
        }

        $bidangTest = $this->request->getVar('id_bidang_test');
        //pecah string berdasarkan string "," 
        $idBidangTest = explode(" - ", $bidangTest);
        //mencari element array 0
        $idBidangTest = $idBidangTest[0];
        //tampilkan hasil pemecahan

        $jenisTest = $this->request->getVar('kode_test');
        //pecah string berdasarkan string "," 
        $idJenisTest = explode(" - ", $jenisTest);
        //mencari element array 0
        $idJenisTest = $idJenisTest[0];
        //tampilkan hasil pemecahan

        $subBidangTest = $this->request->getVar('id_sub_bidang_test');
        //pecah string berdasarkan string "," 
        $idSubBidangTest = explode(" - ", $subBidangTest);
        //mencari element array 0
        $idSubBidangTest = $idSubBidangTest[0];

        $unitKerja = $this->request->getVar('id_unit_kerja');
        //pecah string berdasarkan string "," 
        $idUnitKerja = explode(" - ", $unitKerja);
        //mencari element array 0
        $idUnitKerja = $idUnitKerja[0];

        $this->dataRegistrasiUjian->save([
            'no_reg_ujian' => $this->request->getVar('no_reg_ujian'),
            'nik' => $this->request->getVar('nik'),
            'nip' => $this->request->getVar('nip'),
            'nama_peserta' => $this->request->getVar('nama_peserta'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'pin_reg' => $this->request->getVar('pin_reg'),
            'kode_test' => $idJenisTest,
            'id_bidang_test' => $idBidangTest,
            'id_sub_bidang_test' => $idSubBidangTest,
            'id_unit_kerja' => $idUnitKerja
        ]);

        session()->setFlashData('Pesan','Registrasi Ujian Berhasil di Tambah');

        return redirect()->to('/RegistrasiUjian/registrasiUjian');
    }

    public function delete($id)
    {
        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataRegistrasiUjian->where('id', $id)->delete();
        session()->setFlashData('Pesan','Registrasi Ujian Berhasil di Hapus');
        return redirect()->to('/RegistrasiUjian/registrasiUjian');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function loginUjian(){

        if (!$this->validate([
            'no_reg_ujian' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ],
            'pin_reg' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ]               
        ])){

            return redirect()->to('/Auth/dashboard')->withInput();
        }

        $noRegUjian = $this->request->getVar('no_reg_ujian');
        $pinRegUjian = $this->request->getVar('pin_reg');

        $noReg = $this->dataRegistrasiUjian->getRegistrasiUjianNoReg($noRegUjian);

        if (empty($noReg)){
            return redirect()->to('/Auth/dashboard')->withInput();
        }

        if ($noReg['pin_reg']!=$pinRegUjian){
            return redirect()->to('/Auth/dashboard')->withInput();
        }

        $config = $this->dataConfig->getConfigByKdTest($noReg['kode_test']);

        $data = [
            'title' => 'CAT| LoginUjian',
            'regUjian' => $noReg,
            'config' => $config
        ];
        echo view('pages/registrasiUjian/loginUjian',$data);
    }

	//--------------------------------------------------------------------

}
