<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class bidangTestModel extends Model
{
    protected $table    =   'bidang_test';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','bidang_test','create_date','update_date'];

    public function getBidangTest($bidangTest = false)
    {
        if ($bidangTest==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$bidangTest])->first();
    }

    public function getIdBidangTest($bidangTestBy = false)
    {
        if ($bidangTestBy==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$bidangTestBy])->first();
    }

    

    public function cariBedasarkan($keyword){
        $builder = $this->table('bidang_test');
        $builder->like('bidang_test', $keyword);
        return $builder;
    }

}