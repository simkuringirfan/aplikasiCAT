<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class soalModel extends Model
{
    protected $table    =   'soal';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','soal','jawaban','jenis_soal','point_soal','point_max','jawaban_benar','kode_test','id_bidang_test','id_sub_bidang_test','id_unit_kerja','create_date','update_date'];

    public function getSoal($id = false)
    {
        if ($id==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$id])->first();
    }    

    public function cariBedasarkan($keyword){
        $builder = $this->table('soal');
        $builder->like('id_unit_kerja', $keyword);
        return $builder;
    }

    public function getSoalBy($kodeTest = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->findAll($jumlahSoal);
    }

    public function getSumSoalBy($kodeTest = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
        return $this->where(['kode_test'=>$kodeTest])->findAll($jumlahSoal);
    }

    public function getSoalByKTIB($kodeTest = false, $idBidangTest = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTIB($kodeTest = false, $idBidangTest = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->findAll($jumlahSoal);
    }

    public function getSoalByKTISB($kodeTest = false, $idSubBidangTest = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTISB($kodeTest = false, $idSubBidangTest = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->findAll($jumlahSoal);
    }

    public function getSoalByKTUK($kodeTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTUK($kodeTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSoalByKTIBISB($kodeTest = false, $idBidangTest = false, $idSubBidangTest = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTIBISB($kodeTest = false, $idBidangTest = false, $idSubBidangTest = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->findAll($jumlahSoal);
    }

    public function getSoalByKTIBUK($kodeTest = false, $idBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTIBUK($kodeTest = false, $idBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSoalByKTISBUK($kodeTest = false, $idSubBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTISBUK($kodeTest = false, $idSubBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSoalByKTIBISBUK($kodeTest = false, $idBidangTest = false, $idSubBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

    public function getSumSoalByKTIBISBUK($kodeTest = false, $idBidangTest = false, $idSubBidangTest = false, $idUnitKerja = false, $jumlahSoal = false)
    {
        $this->select('sum(point_max) as pointSoal');
                return $this->where(['kode_test'=>$kodeTest])->where(['id_bidang_test'=>$idBidangTest])->where(['id_sub_bidang_test'=>$idSubBidangTest])->where(['id_unit_kerja'=>$idUnitKerja])->findAll($jumlahSoal);
    }

}