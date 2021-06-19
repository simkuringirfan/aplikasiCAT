<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class JenisTestModel extends Model
{
    protected $table    =   'jenis_test';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','nama_test','hasil_cat','create_date','update_date'];

    public function getJenisTest($jenisTest = false)
    {
        if ($jenisTest==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$jenisTest])->first();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('jenis_test');
        $builder->like('nama_test', $keyword);
        return $builder;
    }
}