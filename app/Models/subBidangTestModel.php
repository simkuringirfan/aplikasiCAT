<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class subBidangTestModel extends Model
{
    protected $table    =   'sub_bidang_test';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','sub_bidang_test','create_date','update_date'];

    public function getSubBidangTest($subBidangTest = false)
    {
        if ($subBidangTest==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$subBidangTest])->first();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('sub_bidang_test');
        $builder->like('sub_bidang_test', $keyword);
        return $builder;
    }
}