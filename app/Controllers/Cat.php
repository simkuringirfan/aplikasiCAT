<?php namespace App\Controllers;

use App\Controllers\Admin\User;
use App\Models\usersModel;
use CodeIgniter\HTTP\Request;

class Cat extends BaseController
{
    protected $dataUsers;


    public function __construct()
    {
        $this->dataUsers = new usersModel();
    }
	public function index()
	{
        $data = [
            'title' => 'Home | Welcome'
        ];
        echo view('pages/index',$data);
    }
    public function about()
	{
        $data = [
            'title' => 'About'
        ];
        echo view('pages/about',$data);
    }
    public function contact()
	{
        $data = [
            'title' => 'Contact'
        ];
        echo view('pages/contact',$data);
    }
    public function users()
	{
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $d_user = $this->dataUsers->getUsers();

        $data = [
            'title' => 'Users',
            'currentPage' => $currentPage,
            'users' => $d_user
        ];
    if(in_groups('Administrator')) :
        echo view('pages/users/users',$data);

    else :
        echo view('pages/auth/pageNotFound',$data);
        
    endif;
        
    }

    public function createUsers()
    {
        $data = [
            'title' => 'Form Create Users',
            'validation' => \Config\Services::validation()
        ];

    if(in_groups('Administrator')) :
        return view('pages/users/createUsers',$data);
    else :
        echo view('pages/auth/pageNotFound',$data);
    endif;
    }

    public function save(){

        //validasi inputan
        if (!$this->validate([
            // 'id_user' => [
            //     'rules' => 'required|is_unique[users.id_user]',
            //     'errors' => [
            //         'required' => '{field} harus di isi',
            //         'is_unique' => '{field} sudah ada'
            //     ]
            //     ],
            'nip' => [
                'rules' => 'required|is_unique[users.nip]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada yang menggunakan'
                ]
                ],
            'jenis_user' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                    'is_unique'=> '{field} sudah ada yang menggunakan'
                ]
                ],
            'password' => [
                'rules' => 'required',
                'errors' =>[
                    'required'=> '{field} harus di isi',
                ]
                ]
            // 'image' => [
            //     //dikomen 'rules' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
            //     'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'max_size' => 'Ukuran gambar melebihi dari size yang ditentukan',
            //         'is_image' => 'Pastikan yang anda pilih gambar',
            //         'mime_in' => 'Yang anda pilih bukan gambar'
            //         ]
            //     ]  
            
        ])){
            // $validation = \Config\Services::validation();
            
            // return redirect()->to('createUsers')->withInput()->with('validation',$validation);
            return redirect()->to('createUsers')->withInput();
        }

        //ambil gambar
        // $fileImage = $this->request->getFile('image');

        // // apakah tidak ada gambar di upload?
        // if($fileImage->getError()==4){
        //     $namaImage = 'default.jpg';
        // }else{
        // // generate image random
        // //ambil nama file
        // $namaImage = $fileImage->getRandomName();

        // // pindahkan file ke folder img
        // $fileImage->move('img',$namaImage);
            
        // }
        if(in_groups('Administrator')) :
            $this->dataUsers->save([
                // 'id_user' => $this->request->getVar('id_user'),
                'nip' => $this->request->getVar('nip'),
                'jenis_user' => $this->request->getVar('jenis_user'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password')
            ]);
    
            session()->setFlashData('Pesan','User Berhasil di Tambah');
    
            return redirect()->to('/Cat/users');
        else :
            $data = [
                'title' => 'Save'
            ];
            echo view('pages/auth/pageNotFound',$data);
        endif;
        
    }

    public function delete($id)
    {

        // //cari gambar berdasarkan id
        // $cImage = $this->dataUsers->where('id_user', $id_user)->find();
        // //hapus gambar
        // if ($cImage[0]['image'] != 'default.jpg'){
        //     unlink('img/' . $cImage[0]['image']);
        // }
        if(in_groups('Administrator')) :

        // $this->dataUsers->delete($id_user);
        $this->dataUsers->where('id', $id)->delete();
        session()->setFlashData('Pesan','User Berhasil di Hapus');
        return redirect()->to('/Cat/users');
        else :
            $data = [
                'title' => 'Delete'
            ];
            echo view('pages/auth/pageNotFound',$data);
        endif;
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Users',
            'validation' => \Config\Services::validation(),
            'users' => $this->dataUsers->getUsers($id)
        ];

        if(in_groups('Administrator')) :
            return view('pages/users/edit',$data);
        else :
            echo view('pages/auth/pageNotFound',$data);
        endif;
    }

    public function ubah($id)
    {
        if ($this->request->getVar('nip')==$this->dataUsers->getUsers($id)['nip']){
            if ($this->request->getVar('username')==$this->dataUsers->getUsers($id)['username']){
        }else{
            //validasi inputan
            if (!$this->validate([
               
             //     'image' => [
             //         'rules' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
             //         'errors' => [
             //             'uploaded' => 'Silahkan pilih gambah terlebih dahulu',
             //             'max_size' => 'Ukuran gambar melebihi dari size yang ditentukan',
             //             'is_image' => 'Pastikan yang anda pilih gambar',
             //             'mime_in' => 'Yang anda pilih bukan gambar'
             //         ]
             //     ]      
             'jenis_user' => [
                 'rules' => 'required',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                 ]
                 ],
             'username' => [
                 'rules' => 'required|is_unique[users.username]',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                     'is_unique'=> '{field} sudah ada yang menggunakan'
                 ]
                 ],
             'password' => [
                 'rules' => 'required',
                 'errors' =>[
                     'required'=> '{field} harus di isi',
                 ]
                 ] 
              ])){
             //     // $validation = \Config\Services::validation();
                 
             //     // return redirect()->to('/Cat/edit/'. $id_user)->withInput()->with('validation',$validation);
                  return redirect()->to('/Cat/edit/'. $id)->withInput();
 
              }
     }
    }

        //ambil gambar
        // $fileImage = $this->request->getFile('image');

        // //cek gambar tetap atau berubah


        // // apakah tidak ada gambar di upload?
        // if($fileImage->getError()==4){
        //     $namaImage = $this->request->getVar('imageLama');
        // }else{
        // // generate image random
        // //ambil nama file
        // $namaImage = $fileImage->getRandomName();

        // // pindahkan file ke folder img
        // $fileImage->move('img',$namaImage);

        // //hapus file lama
        // unlink('img/' . $this->request->getVar('imageLama'));
        // }

        if(in_groups('Administrator')) :

            $this->dataUsers->save([
            'id' => $this->request->getVar('id'),
            'nip' => $this->request->getVar('nip'),
            'jenis_user' => $this->request->getVar('jenis_user'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
            // 'image' => $namaImage
        ]);
        
        session()->setFlashData('Pesan','User Berhasil di Ubah');

        return redirect()->to('/Cat/users');
        else :
            $data = [
                'title' => 'Ubah'
            ];
            echo view('pages/auth/pageNotFound',$data);
        endif;
    }



	//--------------------------------------------------------------------

}
