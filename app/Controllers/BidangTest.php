<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\bidangTestModel;
use CodeIgniter\HTTP\Request;

class BidangTest extends BaseController
{
    protected $dataBidangTest;

    public function __construct()
    {
        $this->dataBidangTest = new bidangTestModel();
    }

    public function bidangTest()
	{
        
        $currentPage = $this->request->getVar('page_bidang_test') ? $this->request->getVar('page_bidang_test') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_bidangTestBy = $this->dataBidangTest->cariBedasarkan($keyword);
        } else{
            $d_bidangTestBy = $this->dataBidangTest;
        }

        $d_bidangTestBy = $d_bidangTestBy->paginate(20,'bidang_test');
        $d_pager   = $this->dataBidangTest->pager;

        $d_bidangTest = $this->dataBidangTest->getBidangTest();

        $data = [
            'title' => 'Data Bidang Test',
            'bidangTestBy' => $d_bidangTestBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'bidangTest' => $d_bidangTest
        ];

        echo view('pages/bidangTest/bidangTest',$data);
        
    }

    public function createBidangTest()
    {
        $data = [
            'title' => 'Form Create Bidang Test',
            'validation' => \Config\Services::validation()
        ];

    if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/bidangTest/createBidangTest',$data);
        
    else :
        echo view('pages/auth/pageNotFound',$data);
        
    endif;
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            'bidang_test' => [
                'rules' => 'required|is_unique[bidang_test.bidang_test]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada'
                ]
                ]            
        ])){

            return redirect()->to('createBidangTest')->withInput();
        }

    if(in_groups('Administrator') || in_groups('Operator')) :
   
        $this->dataBidangTest->save([
            'bidang_test' => $this->request->getVar('bidang_test')
        ]);

        session()->setFlashData('Pesan','Bidang Test Berhasil di Tambah');

        return redirect()->to('/BidangTest/bidangTest');
        
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

        $this->dataBidangTest->where('id', $id)->delete();
        session()->setFlashData('Pesan','Bidang Test Berhasil di Hapus');
        return redirect()->to('/BidangTest/bidangTest');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Bidang Test',
            'validation' => \Config\Services::validation(),
            'bidangTest' => $this->dataBidangTest->getBidangTest($id)
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
             return view('pages/bidangTest/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;       
    }

    public function ubah($id)
    {
        if ($this->request->getVar('bidang_test')==$this->dataBidangTest->getBidangTest($id)['bidang_test']){
        }else{
            //validasi inputan
            if (!$this->validate([    
             'bidang_test' => [
                 'rules' => 'required|is_unique[bidang_test.bidang_test]',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                     'is_unique'=> '{field} sudah ada'
                 ]
                 ]
              ])){
 
                return redirect()->to('/BidangTest/edit/'. $id)->withInput();
 
              }
    }

    if(in_groups('Administrator') || in_groups('Operator')) :
            $this->dataBidangTest->save([
            'id' => $this->request->getVar('id'),
            'bidang_test' => $this->request->getVar('bidang_test')
        ]);
        
        session()->setFlashData('Pesan','Bidang Test Berhasil di Ubah');

        return redirect()->to('/BidangTest/bidangTest');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;       

    }



	//--------------------------------------------------------------------

}
