<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class registrasiUjianModel extends Model
{
    protected $table    =   'registrasi_ujian';
    protected $primarykey = 'no_reg_ujian';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','no_reg_ujian','nik','nip','nama_peserta','jenis_kelamin','tempat_lahir','tanggal_lahir','pin_reg','kode_test','id_bidang_test','id_sub_bidang_test','id_unit_kerja','create_date','update_date'];

    public function getRegistrasiUjian($id = false)
    {
        if ($id==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$id])->first();
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