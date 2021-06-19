<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\jenisTestModel;
use CodeIgniter\HTTP\Request;

class JenisTest extends BaseController
{
    protected $dataJenisTest;

    public function __construct()
    {
        $this->dataJenisTest = new jenisTestModel();
    }
    public function jenisTest()
	{

        $currentPage = $this->request->getVar('page_jenis_test') ? $this->request->getVar('page_jenis_test') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_jenisTestBy = $this->dataJenisTest->cariBedasarkan($keyword);
        } else{
            $d_jenisTestBy = $this->dataJenisTest;
        }

        $d_jenisTestBy = $d_jenisTestBy->paginate(20,'nama_test');
        $d_pager   = $this->dataJenisTest->pager;

        $d_jenisTest = $this->dataJenisTest->getJenisTest();

        $data = [
            'title' => 'Data Jenis Test',
            'jenisTestBy' => $d_jenisTestBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'jenisTest' => $d_jenisTest
        ];

        echo view('pages/jenisTest/jenisTest',$data);
    }

    public function createJenisTest()
    {
        $data = [
            'title' => 'Form Create Jenis Test',
            'validation' => \Config\Services::validation()
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/jenisTest/createJenisTest',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            'nama_test' => [
                'rules' => 'required|is_unique[jenis_test.nama_test]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada'
                ]
                ],
            'hasil_cat' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ]           
        ])){

            return redirect()->to('createJenisTest')->withInput();
        }

        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataJenisTest->save([
            'nama_test' => $this->request->getVar('nama_test'),
            'hasil_cat' => $this->request->getVar('hasil_cat')
        ]);

        session()->setFlashData('Pesan','Bidang Test Berhasil di Tambah');

        return redirect()->to('/JenisTest/jenisTest');
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
        $this->dataJenisTest->where('id', $id)->delete();
        session()->setFlashData('Pesan','Jenis Test Berhasil di Hapus');
        return redirect()->to('/JenisTest/jenisTest');
        else :
            $data = [
                'title' => 'Dekete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;  
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Jenis Test',
            'validation' => \Config\Services::validation(),
            'jenisTest' => $this->dataJenisTest->getJenisTest($id)
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/jenisTest/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;  
    }

    public function ubah($id)
    {
        if ($this->request->getVar('nama_test')==$this->dataJenisTest->getJenisTest($id)['nama_test']){
        }else{
            //validasi inputan
            if (!$this->validate([    
             'nama_test' => [
                 'rules' => 'required|is_unique[jenis_test.nama_test]',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                     'is_unique'=> '{field} sudah ada'
                 ]
                 ],
             'hasil_cat' => [
                 'rules' => 'required',
                 'errors' =>[
                     'required'=> '{field} harus di isi'
                 ]
                 ]
              ])){
 
                return redirect()->to('/JenisTest/edit/'. $id)->withInput();
 
              }
    }

    if(in_groups('Administrator') || in_groups('Operator')) :
            $this->dataJenisTest->save([
            'id' => $this->request->getVar('id'),
            'nama_test' => $this->request->getVar('nama_test'),
            'hasil_cat' => $this->request->getVar('hasil_cat'),
        ]);
        
        session()->setFlashData('Pesan','Bidang Test Berhasil di Ubah');

        return redirect()->to('/JenisTest/jenisTest');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;  
    }



	//--------------------------------------------------------------------

}
