<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class configModel extends Model
{
    protected $table    =   'config';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','jumlah_soal','waktu_ujian','kode_test','id_bidang_test','id_sub_bidang_test','id_unit_kerja','tata_tertib','create_date','update_date'];

    public function getConfig($id = false)
    {
        if ($id==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$id])->first();
    }

    public function getConfigByKdTest($kodeTest = false)
    {
        if ($kodeTest==false){
            return $this->findAll();

        }
        
        return $this->where(['kode_test'=>$kodeTest])->first();
    }

    public function getRegistrasiUjianNoReg($noReg = false)
    {
        if ($noReg==false){
            return $this->findAll();

        }
        
        return $this->where(['no_reg_ujian'=>$noReg])->first();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('registrasi_ujian');
        $builder->like('nama_peserta', $keyword);
        return $builder;
    }
}