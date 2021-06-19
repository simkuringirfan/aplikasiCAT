<?php namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table    =   'users';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['id','fullname','user_image','email','username','password_hash','reset_hash','reset_at','reset_expires','activate_hash','status','status_message','active','force_pass_reset','created_at','updated_at','deleted_at'];

    public function getUsers($user = false)
    {
        if ($user==false){
            return $this->findAll();

        }
        
        return $this->where(['id'=>$user])->first();
    }
}