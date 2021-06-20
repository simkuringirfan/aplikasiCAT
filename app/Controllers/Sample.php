<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\subBidangTestModel;
use App\Models\bidangTestModel;
use App\Models\registrasiUjianModel;
use App\Models\jenisTestModel;
use App\Models\unitKerjaModel;

use CodeIgniter\HTTP\Request;

class Sample extends BaseController
{
    protected $datasubBidangTest;
    protected $dataBidangTest;
    protected $dataRegistrasiUjian;
    protected $dataJenisTest;
    protected $dataUnitKerja;

    public function __construct()
    {
        $this->datasubBidangTest = new subBidangTestModel();
        $this->dataBidangTest = new bidangTestModel();
        $this->dataRegistrasiUjian = new registrasiUjianModel();
        $this->dataJenisTest = new jenisTestModel();
        $this->dataUnitKerja = new unitKerjaModel();
    }

    function bidangTest()
    {

        $bidangTest = $this->request->getVar('id');
        //pecah string berdasarkan string "," 
        $idBidangTest = explode(" - ", $bidangTest);
        //mencari element array 0
        $idBidangTest = $idBidangTest[0];
        //tampilkan hasil pemecahan

        $data=$this->dataBidangTest->getBidangTest($idBidangTest);
        return json_encode($data);
    }

    function jenisTest()
    {

        $jenisTest = $this->request->getVar('id');
        //pecah string berdasarkan string "," 
        $idJenisTest = explode(" - ", $jenisTest);
        //mencari element array 0
        $idJenisTest = $idJenisTest[0];
        //tampilkan hasil pemecahan

 
        $data=$this->dataJenisTest->getJenisTest($idJenisTest);
        return json_encode($data);
    }    

    function subBidangTest()
    {

        $subBidangTest = $this->request->getVar('id');
        //pecah string berdasarkan string "," 
        $idSubBidangTest = explode(" - ", $subBidangTest);
        //mencari element array 0
        $idSubBidangTest = $idSubBidangTest[0];
        //tampilkan hasil pemecahan

 
        $data=$this->datasubBidangTest->getSubBidangTest($idSubBidangTest);
        return json_encode($data);
    }

    function unitKerja()
    {

        $unitKerja = $this->request->getVar('id');
        //pecah string berdasarkan string "," 
        $idUnitKerja = explode(" - ", $unitKerja);
        //mencari element array 0
        $idUnitKerja = $idUnitKerja[0];
        //tampilkan hasil pemecahan

 
        $data=$this->dataUnitKerja->getUnitKerja($idUnitKerja);
        return json_encode($data);
    }    



	//--------------------------------------------------------------------

}
