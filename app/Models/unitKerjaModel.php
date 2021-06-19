<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class unitKerjaModel extends Model
{
    protected $table    =   'unit_kerja';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','unit_kerja','create_date','update_date'];

    public function getUnitKerja($unitKerja = false)
    {
        if ($unitKerja==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$unitKerja])->first();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('unit_kerja');
        $builder->like('unit_kerja', $keyword);
        return $builder;
    }
}