<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class ujianModel extends Model
{
    protected $table    =   'ujian_cat';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['no_reg_ujian','id_config','soal_dijawab','belum_jawab','selesai_ujian','nilai_total','nilai_tambah','detail_nilai_tambah','grade','status_ujian','create_date','update_date'];

    public function getUjianNoReg($noReg = false)
    {
        if ($noReg==false){
            return $this->findAll();

        }
        
        return $this->where(['no_reg_ujian'=>$noReg])->first();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('ujian');
        $builder->like('no_reg_ujian', $keyword);
        return $builder;
    }

    public function getUjianNoRegByConfig($hasilCat)
    {
        if ($hasilCat==false){
            $this->table('ujian_cat');
            $this->select('ujian_cat.id as id_ujian_cat, ujian_cat.no_reg_ujian, ujian_cat.id_config, config.kode_test, jenis_test.nama_test, jenis_test.hasil_cat,
            ujian_cat.soal_dijawab, ujian_cat.belum_jawab, ujian_cat.selesai_ujian, ujian_cat.nilai_total, ujian_cat.nilai_tambah, ujian_cat.detail_nilai_tambah, ujian_cat.grade, ujian_cat.status_ujian');
            $this->join('config', 'config.id = ujian_cat.id_config','left');
            $this->join('jenis_test', 'config.kode_test = jenis_test.id','left');
            $query = $this->findAll();
            return $query;

        }
        
            $this->table('ujian_cat');
            $this->select('ujian_cat.id as id_ujian_cat, ujian_cat.no_reg_ujian, ujian_cat.id_config, config.kode_test, jenis_test.nama_test, jenis_test.hasil_cat,
            ujian_cat.soal_dijawab, ujian_cat.belum_jawab, ujian_cat.selesai_ujian, ujian_cat.nilai_total, ujian_cat.nilai_tambah, ujian_cat.detail_nilai_tambah, ujian_cat.grade, ujian_cat.status_ujian');
            $this->join('config', 'config.id = ujian_cat.id_config','left');
            $this->join('jenis_test', 'config.kode_test = jenis_test.id','left');
            $this->where(['jenis_test.hasil_cat'=>$hasilCat]);
            $query = $this->findAll();
            return $query;
    }
}