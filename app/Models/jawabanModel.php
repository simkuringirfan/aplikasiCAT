<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class jawabanModel extends Model
{
    protected $table    =   'jawaban';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';
    protected $allowedFields = ['id','id_soal','jawaban','create_date','update_date'];

    public function getJawaban($id = false)
    {
        if ($id==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$id])->first();
    }

    public function getJawabanByIdSoal($idSoal = false)
    {
        if ($idSoal==false){
            return $this->findAll();

        }
        
        return $this->where(['id_soal'=>$idSoal])->findAll();
    }

    public function cariBedasarkan($keyword){
        $builder = $this->table('jawaban');
        $builder->like('jawaban', $keyword);
        return $builder;
    }
}