<?php namespace App\Controllers;

use App\Controllers\Admin\User;
use CodeIgniter\HTTP\Request;

class Auth extends BaseController
{

    public function __construct()
    {

    }
	public function login()
	{
        $data = [
            'title' => 'CAT| Login'
        ];
        echo view('pages/auth/login',$data);
    }
    public function registrasi()
	{
        $data = [
            'title' => 'CAT| Registrasi'
        ];

        if(in_groups('Administrator')) :
            echo view('pages/auth/registrasi',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
            
        endif;    
    }

    public function dashboard(){
        $data = [
            'title' => 'CAT| Dashboard',
            'validation' => \Config\Services::validation()
        ];
        
        if(in_groups('Ujian')) :
            echo view('pages/indexUjian',$data);
        else :
            echo view('pages/index',$data);
            
        endif;  
        
    }
    
    public function indexUjian(){
        $data = [
            'title' => 'CAT| Dashboard',
            'validation' => \Config\Services::validation()
        ];
        
        if(in_groups('Administrator') || in_groups('Operator')) :
            echo view('pages/indexUjian',$data);
        endif;
    }

    public function menuLogin(){
        $data = [
            'title' => 'CAT| Menu Login'
        ];
        
        echo view('pages/auth/menuLogin',$data);
    }
}
