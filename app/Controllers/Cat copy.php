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
        $d_user = $this->dataUsers->getUsers();

        $data = [
            'title' => 'Users',
            'users' => $d_user
        ];

        echo view('pages/users/users',$data);
    }

    public function detail($user)
	{

        $dataUsers = $this->dataUsers->getUsers($user);
        
        $data = [
            'title' => 'Detail',
            'users' => $dataUsers

        ];

        //jika data user tidak ada
        if (empty($data['users'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Users '. $user .' tidak ada');
        }

        return view('pages/users/detail',$data);
    }

    public function createUsers()
    {
        $data = [
            'title' => 'Form Create Users',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/users/createUsers',$data);
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

        $this->dataUsers->save([
            // 'id_user' => $this->request->getVar('id_user'),
            'nip' => $this->request->getVar('nip'),
            'jenis_user' => $this->request->getVar('jenis_user'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashData('Pesan','User Berhasil di Tambah');

        return redirect()->to('/Cat/users');
    }

    public function delete($id)
    {

        // //cari gambar berdasarkan id
        // $cImage = $this->dataUsers->where('id_user', $id_user)->find();
        // //hapus gambar
        // if ($cImage[0]['image'] != 'default.jpg'){
        //     unlink('img/' . $cImage[0]['image']);
        // }

        // $this->dataUsers->delete($id_user);
        $this->dataUsers->where('id', $id)->delete();
        session()->setFlashData('Pesan','User Berhasil di Hapus');
        return redirect()->to('/Cat/users');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Users',
            'validation' => \Config\Services::validation(),
            'users' => $this->dataUsers->getUsers($id)
        ];

        return view('pages/users/edit',$data);
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
    }



	//--------------------------------------------------------------------

}
