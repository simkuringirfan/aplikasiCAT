<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class detailUjianModel extends Model
{
    protected $table    =   'detail_ujian_cat';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','no_reg_ujian','no_soal','no','jawab','hasil','point','status','create_date','update_date'];
    
    public function getDetailUjianSoal($noRegUjian = false)
    {
        if ($noRegUjian==false){
            return $this->findAll();

        }
        $this->table('detail_ujian_cat');
        $this->select('*');
        $this->join('soal', 'soal.id = detail_ujian_cat.no_soal','left');
        $query = $this->where(['no_reg_ujian'=>$noRegUjian])->findAll();
        return $query;
    }

    public function getCountDetailUjianSoal($noRegUjian = false, $all = false)
    {
        if ($noRegUjian==false && $all==false){
            return $this->findAll();

        }
        
        if($all==false){
            $this->table('detail_ujian_cat');
            $this->select('*');
            $this->join('soal', 'soal.id = detail_ujian_cat.no_soal','left');
            $query = $this->where(['no_reg_ujian'=>$noRegUjian])->findAll();
            $query = count($query);
            return $query;
        }

            $this->table('detail_ujian_cat');
            $this->select('*');
            $this->join('soal', 'soal.id = detail_ujian_cat.no_soal','left');
            $query = $this->where(['no_reg_ujian'=>$noRegUjian]);
            $query = $this->where(['status'=>$all])->findAll();
            $query = count($query);
            return $query;
    }

    public function getDetailUjian($noRegUjian = false)
    {
        if ($noRegUjian==false){
            return $this->findAll();

        }

        $query = $this->where(['no_reg_ujian'=>$noRegUjian])->findAll();
        return $query;
    } 

    public function cariBedasarkan($keyword){
        $builder = $this->table('detail_ujian_cat');
        $builder->like('no_reg_ujian', $keyword);
        return $builder;
    }

    public function getTotalNilai($noRegUjian = false)
    {
        if ($noRegUjian==false){
            return $this->findAll();

        }
        $this->select('sum(point) as pointSoal');
        $query = $this->where(['no_reg_ujian'=>$noRegUjian])->findAll();
        return $query;
    } 

}