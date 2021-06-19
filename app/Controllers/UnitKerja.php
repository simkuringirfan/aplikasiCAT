<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\unitKerjaModel;

use CodeIgniter\HTTP\Request;

class UnitKerja extends BaseController
{
    protected $dataUnitKerja;

    public function __construct()
    {
        $this->dataUnitKerja = new unitKerjaModel();

    }
    public function unitKerja()
	{

        $currentPage = $this->request->getVar('page_unit_kerja') ? $this->request->getVar('page_unit_kerja') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $d_unitKerjaBy = $this->dataUnitKerja->cariBedasarkan($keyword);
        } else{
            $d_unitKerjaBy = $this->dataUnitKerja;
        }

        $d_unitKerjaBy = $d_unitKerjaBy->paginate(20,'unit_kerja');
        $d_pager   = $this->dataUnitKerja->pager;

        $d_unitKerja = $this->dataUnitKerja->getUnitKerja();

        $data = [
            'title' => 'Data Unit Kerja',
            'unitKerjaBy' => $d_unitKerjaBy,
            'pager' => $d_pager,
            'currentPage' => $currentPage,
            'unitKerja' => $d_unitKerja
        ];

        echo view('pages/unitKerja/unitKerja',$data);
    }

    public function createUnitKerja()
    {
        
        $data = [
            'title' => 'Form Create Unit Kerja',
            'validation' => \Config\Services::validation()
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
        return view('pages/unitKerja/createUnitKerja',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
		
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            'unit_kerja' => [
                'rules' => 'required|is_unique[unit_kerja.unit_kerja]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada'
                ]
                ]            
        ])){

            return redirect()->to('createUnitKerja')->withInput();
        }

        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataUnitKerja->save([
            'unit_kerja' => $this->request->getVar('unit_kerja')
        ]);

        session()->setFlashData('Pesan','Unit Kerja Berhasil di Tambah');

        return redirect()->to('/UnitKerja/unitKerja');
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
        $this->dataUnitKerja->where('id', $id)->delete();
        session()->setFlashData('Pesan','Unit Kerja Berhasil di Hapus');
        return redirect()->to('/UnitKerja/unitKerja');
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
            'title' => 'Form Edit Unit Kerja',
            'validation' => \Config\Services::validation(),
            'unitKerja' => $this->dataUnitKerja->getUnitKerja($id)
        ];

        if(in_groups('Administrator') || in_groups('Operator')) : 
        return view('pages/unitKerja/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;   
    }

    public function ubah($id)
    {

        if ($this->request->getVar('unit_kerja')==$this->dataUnitKerja->getUnitKerja($id)['unit_kerja']){
        }else{
            //validasi inputan
            if (!$this->validate([    
             'unit_kerja' => [
                 'rules' => 'required|is_unique[unit_kerja.unit_kerja]',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                     'is_unique'=> '{field} sudah ada'
                 ]
                 ]
              ])){
 
                return redirect()->to('/UnitKerja/edit/'. $id)->withInput();
 
              }
    }

    if(in_groups('Administrator') || in_groups('Operator')) :
            $this->dataUnitKerja->save([
            'id' => $this->request->getVar('id'),
            'unit_kerja' => $this->request->getVar('unit_kerja')
        ]);
        
        session()->setFlashData('Pesan','Unit Kerja Berhasil di Ubah');

        return redirect()->to('/UnitKerja/unitKerja');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif; 
    }




	//--------------------------------------------------------------------

}
