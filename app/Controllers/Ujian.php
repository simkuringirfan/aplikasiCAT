<?php namespace App\Controllers;

use App\Controllers\Admin\user;
use App\Models\registrasiUjianModel;
use App\Models\configModel;
use App\Models\ujianModel;
use App\Models\soalModel;
use App\Models\jenisTestModel;
use App\Models\detailUjianModel;
use App\Models\jawabanModel;

use CodeIgniter\HTTP\Request;

class ujian extends BaseController
{

    protected $dataRegistrasiUjian;
    protected $dataConfig;
    protected $dataUjian;
    protected $dataJenisTest;
    protected $dataSoal;
    protected $dataDetailUjian;
    protected $datajabawan;
    protected $pageSoal;

    public function __construct()
    {
        $this->dataRegistrasiUjian = new registrasiUjianModel();
        $this->dataConfig = new configModel();
        $this->dataUjian = new ujianModel();
        $this->dataJenisTest = new jenisTestModel();
        $this->dataSoal = new soalModel();
        $this->dataDetailUjian = new detailUjianModel();
        $this->datajabawan = new jawabanModel();
        $this->pageSoal = '0';
    }
    public function ujian($noRegUjian)
	{
        //pecah string berdasarkan string "," 
        $noRegUjianExp = explode(";", $noRegUjian);
        //mencari element array 0
        $noRegUjianExp = $noRegUjianExp;

        $noRegUjian = $noRegUjianExp[0];

        if ($this->dataUjian->getUjianNoReg($noRegUjian) != null){
            if ($this->dataUjian->getUjianNoReg($noRegUjian)['status_ujian'] == 'Selesai'){ 
                session_destroy();

                $data = [
                    'title' => 'CAT| Dashboard',
                    'validation' => \Config\Services::validation()
                ];

                echo view('pages/index',$data);
            }
        }

        if (empty($noRegUjianExp[1])){
        }else{
            if($noRegUjianExp[1]=='updateUjian'){
                $jawabanRadio = $this->request->getVar('jawabanRadio');
            $jawabanBenar = $this->request->getVar('jawabanBenar');
            $pointSoal = $this->request->getVar('pointSoal');
        
            //pecah string berdasarkan string "," 
            $listJawabanBenar = explode(";", $jawabanBenar);
            //mencari element array 0
            $listJawabanBenar = $listJawabanBenar;

            //pecah string berdasarkan string "," 
            $listPointSoal = explode(";", $pointSoal);
            //mencari element array 0
            $listPointSoal = $listPointSoal;

            for ($i = 0; $i < count($listJawabanBenar); $i++){
                
                if ($listJawabanBenar[$i] == $jawabanRadio){
                    $pointSoal = $listPointSoal[$i];
                    $hasil = 'Benar';
                    break;
                }else{
                    $pointSoal ='0';
                    $hasil = 'Salah';
                }
                
            }

                $this->dataDetailUjian->save([
                    'id' => $this->request->getVar('id'),
                    'jawab' => $jawabanRadio,
                    'hasil' => $hasil,
                    'point' => $pointSoal,
                    'status' => 1
                ]);
        
                $this->pageSoal = $this->request->getVar('pageSoal')+1;
            }
    
            if($noRegUjianExp[1]=='pindahPages'){
                $countSoal = $this->request->getVar('countSoal');
            
                $this->pageSoal = $countSoal-1;
            }     
        }
        

        $currentPage = $this->request->getVar('page_ujian_cat') ? $this->request->getVar('page_ujian_cat') : 1;

        $dataUjianBy = $this->dataRegistrasiUjian->getRegistrasiUjianNoReg($noRegUjian);

        $kodeTest = $dataUjianBy['kode_test'];

        $jenisTest = $this->dataJenisTest->getJenisTest($kodeTest);

        $config = $this->dataConfig->getConfigByKdTest($kodeTest);
        $jmlSoal = $config['jumlah_soal'];

        if ($config['kode_test'] != "0" && $config['id_bidang_test'] != "0" && $config['id_sub_bidang_test'] != "0" && $config['id_unit_kerja'] != "0" ){
            $soal = $this->dataSoal->getSoalByKTIBISBUK($kodeTest, $config['id_bidang_test'], $config['id_sub_bidang_test'], $config['id_unit_kerja'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTIBISBUK($kodeTest, $config['id_bidang_test'], $config['id_sub_bidang_test'], $config['id_unit_kerja'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_sub_bidang_test'] != "0" && $config['id_unit_kerja'] != "0" ){
            $soal = $this->dataSoal->getSoalByKTISBUK($kodeTest, $config['id_sub_bidang_test'], $config['id_unit_kerja'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTISBUK($kodeTest, $config['id_sub_bidang_test'], $config['id_unit_kerja'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_bidang_test'] != "0" && $config['id_unit_kerja'] != "0" ){
            $soal = $this->dataSoal->getSoalByKTIBUK($kodeTest, $config['id_bidang_test'], $config['id_unit_kerja'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTIBUK($kodeTest, $config['id_bidang_test'], $config['id_unit_kerja'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_bidang_test'] != "0" && $config['id_sub_bidang_test'] != "0" ){
            $soal = $this->dataSoal->getSoalByKTIBISB($kodeTest, $config['id_bidang_test'], $config['id_sub_bidang_test'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTIBISB($kodeTest, $config['id_bidang_test'], $config['id_sub_bidang_test'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_unit_kerja'] != "0"){
            $soal = $this->dataSoal->getSoalByKTUK($kodeTest, $config['id_unit_kerja'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTUK($kodeTest, $config['id_unit_kerja'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_sub_bidang_test'] != "0"){
            $soal = $this->dataSoal->getSoalByKTISB($kodeTest, $config['id_sub_bidang_test'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTISB($kodeTest, $config['id_sub_bidang_test'], $jmlSoal);

        }
        elseif ($config['kode_test'] != "0" && $config['id_bidang_test'] != "0"){
            $soal = $this->dataSoal->getSoalByKTIB($kodeTest, $config['id_bidang_test'], $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalByKTIB($kodeTest, $config['id_bidang_test'], $jmlSoal);

        }
        else{
            $soal = $this->dataSoal->getSoalBy($kodeTest, $jmlSoal);
            $sumPointSoal = $this->dataSoal->getSumSoalBy($kodeTest, $jmlSoal);
        }

        $countSoal = count($soal);
        

        $ujianData = $this->dataUjian->getUjianNoReg($noRegUjian);

        if (empty($ujianData)){       

        $this->dataUjian->save([
            'no_reg_ujian' => $noRegUjian,
            'id_config' => $config['id'],
            'soal_dijawab' => '0',
            'belum_jawab' => $jmlSoal,
            'selesai_ujian' => $config['waktu_ujian'],
            'nilai_total' => '0',
            'selesai_ujian' => $config['waktu_ujian'],
            'grade' => 'C',
            'status_ujian' => 'Belum Selesai'
        ]);

            for ($i = 0; $i < $countSoal; $i++){  
                $idSoal= $soal[$i]['id'];
                $this->dataDetailUjian->save([
                    'no_reg_ujian' => $noRegUjian,
                    'no_soal' => $idSoal,
                    'no' => $i+1,
                    'point' => '0'
                ]);

            }            
            
    }

    $pageSoal = $this->pageSoal;

    $ujianData = $this->dataUjian->getUjianNoReg($noRegUjian);
    $detailUjianSoal = $this->dataDetailUjian->getDetailUjianSoal($noRegUjian);
    $countJmlSoal = $this->dataDetailUjian->getCountDetailUjianSoal($noRegUjian);
    $countJawab = $this->dataDetailUjian->getCountDetailUjianSoal($noRegUjian,'1');
    $detailUjian = $this->dataDetailUjian->getDetailUjian($noRegUjian); 

    $currentPage = $this->request->getVar('page_ujian') ? $this->request->getVar('page_ujian') : 1;
    
    $data = [
            'title' => 'CAT | Ujian',
            'config' => $config,
            'detailUjian' => $detailUjian,
            'dataUjianBy' => $dataUjianBy,
            'ujianData' => $ujianData,
            'jenisTest' => $jenisTest,
            'detailUjianSoal' => $detailUjianSoal,
            'countSoal' => $countSoal,
            'countJmlSoal' => $countJmlSoal,
            'countJawab' =>$countJawab,
            'pageSoal' => $pageSoal,
            'currentPage' => $currentPage,
            'sumPointSoal' => $sumPointSoal[0]['pointSoal']
            
        ];

        echo view('pages/ujian',$data);
                    
    }

    public function sampleUjian(){

        $data = [
            'title' => 'CAT | Ujian'
        ];

        echo view('pages/ujian',$data);
    }

    public function config(){

        $data = [
            'title' => 'CAT | Configurasi Ujian'
        ];

        echo view('pages/config',$data);
    }

    public function selesaiUjian($noRegUjian){
        
        $selesaiUjian = ($this->request->getVar('selesai_ujian') / 60);
        
        $pointTotal = $this->dataDetailUjian->getTotalNilai($noRegUjian); 
        $sumPointSoal = $this->request->getVar('sum_point_soal');
        $nilaiTotal = 100/$sumPointSoal;
        $nilaiTotal = round($nilaiTotal * $pointTotal[0]['pointSoal']);

        if ($nilaiTotal > 84){
            $grade ='A';
        }elseif($nilaiTotal > 74){
            $grade ='B';
        }else{
            $grade ='C';
        }

        $this->dataUjian->save([
            'id' => $this->request->getVar('id_ujian'),
            'soal_dijawab' => $this->request->getVar('soalDijawab'),
            'belum_jawab' => $this->request->getVar('sisaSoal'),
            'selesai_ujian' => $selesaiUjian.' Menit',
            'nilai_total' => $nilaiTotal,
            'grade' => $grade,
            'status_ujian' => 'Selesai'
        ]);

        $dataRegistUjian = $this->dataRegistrasiUjian->getRegistrasiUjianNoReg($noRegUjian);
        $dataJenisTest = $this->dataJenisTest->getJenisTest($dataRegistUjian['kode_test']);
        $dataUjian = $this->dataUjian->getUjianNoReg($noRegUjian);
        
        $data = [
            'title' => 'CAT | Hasil Ujian',
            'dataRegistUjian' => $dataRegistUjian,
            'dataJenisTest' => $dataJenisTest,
            'dataUjian' => $dataUjian
        ];

        session_destroy();

        echo view('pages/hasilUjian',$data);

    }

    public function selesaiUjianExpired($noRegUjian){
        
        $dataSelesaiUjianExp = explode(";", $noRegUjian);
        //mencari element array 0
        $dataSelesaiUjianExp = $dataSelesaiUjianExp;

        $noRegUjian = $dataSelesaiUjianExp[0];
        $selesai_ujian = $dataSelesaiUjianExp[1];
        $sum_point_soal = $dataSelesaiUjianExp[2];
        $id_ujian = $dataSelesaiUjianExp[3];
        $soalDijawab = $dataSelesaiUjianExp[4];
        $sisaSoal = $dataSelesaiUjianExp[5];

        $selesaiUjian = ($selesai_ujian / 60);
        
        $pointTotal = $this->dataDetailUjian->getTotalNilai($noRegUjian); 
        $sumPointSoal = $sum_point_soal;
        $nilaiTotal = 100/$sumPointSoal;
        $nilaiTotal = round($nilaiTotal * $pointTotal[0]['pointSoal']);

        if ($nilaiTotal > 84){
            $grade ='A';
        }elseif($nilaiTotal > 74){
            $grade ='B';
        }else{
            $grade ='C';
        }

        $this->dataUjian->save([
            'id' => $id_ujian,
            'soal_dijawab' => $soalDijawab,
            'belum_jawab' => $sisaSoal,
            'selesai_ujian' => $selesaiUjian.' Menit',
            'nilai_total' => $nilaiTotal,
            'grade' => $grade,
            'status_ujian' => 'Selesai'
        ]);

        $dataRegistUjian = $this->dataRegistrasiUjian->getRegistrasiUjianNoReg($noRegUjian);
        $dataJenisTest = $this->dataJenisTest->getJenisTest($dataRegistUjian['kode_test']);
        $dataUjian = $this->dataUjian->getUjianNoReg($noRegUjian);
        
        $data = [
            'title' => 'CAT | Hasil Ujian',
            'dataRegistUjian' => $dataRegistUjian,
            'dataJenisTest' => $dataJenisTest,
            'dataUjian' => $dataUjian
        ];

        session_destroy();

        echo view('pages/hasilUjian',$data);

    }

    public function hasilUjianCAT(){
        $dataUjian = $this->dataUjian->getUjianNoRegByConfig('Ya');

        $data = [
            'title' => 'Data Ujian',
            'dataUjian' => $dataUjian
        ];

        echo view('pages/hasilUjianCAT',$data);
    }

    public function hasilUjianCATPlus(){
        $dataUjian = $this->dataUjian->getUjianNoRegByConfig('Tidak');

        $data = [
            'title' => 'Data Ujian',
            'dataUjian' => $dataUjian
        ];

        echo view('pages/hasilUjianCATPlus',$data);
    }

    public function delete($noRegUjian)
    {
        if(in_groups('Administrator') || in_groups('Operator')) :
        //pecah string berdasarkan string "," 
        $hasilUjianNya = explode(";", $noRegUjian);
        //mencari element array 0
        $hasilUjianNya = $hasilUjianNya;

        $hasilUjian = $hasilUjianNya[1];
        
        $this->dataUjian->where('no_reg_ujian', $hasilUjianNya[0])->delete();
        $this->dataDetailUjian->where('no_reg_ujian', $hasilUjianNya[0])->delete();

        session()->setFlashData('Pesan','Hasil Ujian Berhasil di Hapus');

        if ($hasilUjian=='hasilUjianCat'){
            return redirect()->to('/Ujian/hasilUjianCAT');
        }else{
            return redirect()->to('/Ujian/hasilUjianCATPlus');
        }

        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;  
    }

    public function tambahPenilaian($noRegUjian){
        $data = [
            'title' => 'Form Tambah Penilaian',
            'validation' => \Config\Services::validation(),
            'tambahPenilaian' => $this->dataUjian->getUjianNoReg($noRegUjian)
        ];

        if(in_groups('Administrator') || in_groups('Operator')) :
             return view('pages/tambahPenilaian',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;

    }

    public function updatePenilaian($noRegUjian){
        
        $sumPointNilai = array_sum($this->request->getVar('point_nilai[]'));
        $countPerihalTest = count($this->request->getVar('perihal_test[]'));

        for ($i = 0; $i < $countPerihalTest; $i++){
            $perihalTest = $this->request->getVar('perihal_test['.$i.']');
            $pointNilai = $this->request->getVar('point_nilai['.$i.']');

            $tambahan[] = $perihalTest." = ".$pointNilai."; ";
            
        }

        $detailNilaiTambah = implode(" ",$tambahan);

        if(in_groups('Administrator') || in_groups('Operator')) :
        $this->dataUjian->save([
            'id' => $this->request->getVar('id'),
            'nilai_tambah' => $sumPointNilai,
            'detail_nilai_tambah' => $detailNilaiTambah
        ]);

        return redirect()->to('/Ujian/hasilUjianCATPlus');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
            
        endif;

    }
}
