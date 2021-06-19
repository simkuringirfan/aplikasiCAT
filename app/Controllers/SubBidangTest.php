<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\subBidangTestModel;
use App\Models\bidangTestModel;

use CodeIgniter\HTTP\Request;

class SubBidangTest extends BaseController
{
    protected $datasubBidangTest;
    protected $dataBidangTest;

    public function __construct()
    {
        $this->datasubBidangTest = new subBidangTestModel();
        $this->dataBidangTest = new bidangTestModel();
    }
    public function subBidangTest()
	{

        $currentPage = $this->request->getVar('page_sub_bidang_test') ? $this->request->getVar('page_sub_bidang_test') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_subBidangTestBy = $this->datasubBidangTest->cariBedasarkan($keyword);
        } else{
            $d_subBidangTestBy = $this->datasubBidangTest;
        }

        $d_subBidangTestBy = $d_subBidangTestBy->paginate(20,'sub_bidang_test');
        $d_pager   = $this->datasubBidangTest->pager;

        $d_subBidangTest = $this->datasubBidangTest->getSubBidangTest();

        $data = [
            'title' => 'Data Bidang Test',
            'subBidangTestBy' => $d_subBidangTestBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'subBidangTest' => $d_subBidangTest
        ];

        echo view('pages/subBidangTest/subBidangTest',$data);
    }

    public function createSubBidangTest()
    {
        
        $data = [
            'title' => 'Form Create Sub Bidang Test',
            'validation' => \Config\Services::validation()
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/subBidangTest/createSubBidangTest',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
		
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            'sub_bidang_test' => [
                'rules' => 'required|is_unique[sub_bidang_test.sub_bidang_test]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada'
                ]
                ]            
        ])){

            return redirect()->to('createSubBidangTest')->withInput();
        }

        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->datasubBidangTest->save([
            'sub_bidang_test' => $this->request->getVar('sub_bidang_test')
        ]);

        session()->setFlashData('Pesan','Sub Bidang Test Berhasil di Tambah');

        return redirect()->to('/SubBidangTest/subBidangTest');
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
        $this->datasubBidangTest->where('id', $id)->delete();
        session()->setFlashData('Pesan','Sub Bidang Test Berhasil di Hapus');
        return redirect()->to('/SubBidangTest/subBidangTest');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function edit($id)
    {

        $bidangTest = $this->dataBidangTest->getIdBidangTest();

        $data = [
            'title' => 'Form Edit Sub Bidang Test',
            'validation' => \Config\Services::validation(),
            'subBidangTest' => $this->datasubBidangTest->getSubBidangTest($id),
            'bidangTest' => $bidangTest
        ];

        if(in_groups('Administrator') || in_groups('Operator')) : 
        return view('pages/subBidangTest/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function ubah($id)
    {

        $BidangTest = $this->request->getVar('id_bidang_test');
        //pecah string berdasarkan string "," 
        $idBidangTest = explode("-", $BidangTest);
        //mencari element array 0
        $idBidangTest = $idBidangTest[0];
        //tampilkan hasil pemecahan

        if ($this->request->getVar('sub_bidang_test')==$this->datasubBidangTest->getSubBidangTest($id)['sub_bidang_test']){
        }else{
            //validasi inputan
            if (!$this->validate([    
             'sub_bidang_test' => [
                 'rules' => 'required|is_unique[sub_bidang_test.sub_bidang_test]',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                     'is_unique'=> '{field} sudah ada'
                 ]
                 ]
              ])){
 
                return redirect()->to('/SubBidangTest/edit/'. $id)->withInput();
 
              }
    }

    if(in_groups('Administrator') || in_groups('Operator')) :
            $this->datasubBidangTest->save([
            'id' => $this->request->getVar('id'),
            'id_bidang_test' => $idBidangTest,
            'sub_bidang_test' => $this->request->getVar('sub_bidang_test')
        ]);
        
        session()->setFlashData('Pesan','Sub Bidang Test Berhasil di Ubah');

        return redirect()->to('/SubBidangTest/subBidangTest');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif; 
    }




	//--------------------------------------------------------------------

}
