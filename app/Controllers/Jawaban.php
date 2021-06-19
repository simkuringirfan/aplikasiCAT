<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\jawabanModel;
use App\Models\soalModel;

use CodeIgniter\HTTP\Request;

class Jawaban extends BaseController
{
    protected $dataJawaban;
    protected $dataSoal;

    public function __construct()
    {
        $this->dataJawaban = new jawabanModel();
        $this->dataSoal = new soalModel();
    }
    public function jawaban()
	{

        $currentPage = $this->request->getVar('page_jawaban') ? $this->request->getVar('page_jawaban') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_jawabanBy = $this->dataJawaban->cariBedasarkan($keyword);
        } else{
            $d_jawabanBy = $this->dataJawaban;
        }

        $d_jawabanBy = $d_jawabanBy->paginate(20,'jawaban');
        $d_pager   = $this->dataJawaban->pager;

        $d_jawaban = $this->dataJawaban->getJawaban();

        $data = [
            'title' => 'Data Bidang Test',
            'jawabanBy' => $d_jawabanBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'jawaban' => $d_jawaban
        ];

        echo view('pages/jawaban/jawaban',$data);
    }

    public function createJawaban()
    {
        
        $soal = $this->dataSoal->getSoal();

        $data = [
            'title' => 'Form Create Jawaban',
            'validation' => \Config\Services::validation(),
            'soal' => $soal
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/jawaban/createJawaban',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function save(){

        $Soal = $this->request->getVar('id_soal');
        //pecah string berdasarkan string "," 
        $idSoal = explode("-", $Soal);
        //mencari element array 0
        $idSoal = $idSoal[0];
        //tampilkan hasil pemecahan

        //validasi inputan
        if (!$this->validate([
            'jawaban' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi'
                ]
                ]            
        ])){

            return redirect()->to('createJawaban')->withInput();
        }

        if(in_groups('Administrator') || in_groups('Operator')) :

        $this->dataJawaban->save([
            'id_soal' => $idSoal,
            'jawaban' => $this->request->getVar('jawaban')
        ]);

        session()->setFlashData('Pesan','Jawaban Berhasil di Tambah');

        return redirect()->to('/Jawaban/jawaban');
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
        $this->dataJawaban->where('id', $id)->delete();
        session()->setFlashData('Pesan','Jawaban Berhasil di Hapus');
        return redirect()->to('/Jawaban/jawaban');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
        
    }

    public function edit($id)
    {

        $soal = $this->dataSoal->getSoal();

        $data = [
            'title' => 'Form Edit Sub Bidang Test',
            'validation' => \Config\Services::validation(),
            'jawaban' => $this->dataJawaban->getJawaban($id),
            'soal' => $soal
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/jawaban/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function ubah($id)
    {

        $Soal = $this->request->getVar('id_soal');
        //pecah string berdasarkan string "," 
        $idSoal = explode("-", $Soal);
        //mencari element array 0
        $idSoal = $idSoal[0];
        //tampilkan hasil pemecahan

            //validasi inputan
            if (!$this->validate([    
             'jawaban' => [
                 'rules' => 'required',
                 'errors' =>[
                     'required'=> '{field} harus di isi'
                 ]
                 ]
              ])){
 
                return redirect()->to('/Jawaban/edit/'. $id)->withInput();
 
              }

    if(in_groups('Administrator') || in_groups('Operator')) :
            $this->dataJawaban->save([
            'id' => $this->request->getVar('id'),
            'id_soal' => $idSoal,
            'jawaban' => $this->request->getVar('jawaban')
        ]);
        
        session()->setFlashData('Pesan','Jawaban Berhasil di Ubah');

        return redirect()->to('/Jawaban/jawaban');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }




	//--------------------------------------------------------------------

}
