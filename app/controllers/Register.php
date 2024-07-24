<?php 
//tahapan registrasi
//1.terima data dari form
//2.cek password dengan komfirmasi password
//3.hash password, jika sama
//4.susun semua data dalam bentuk array
//5.simpan data
class Register extends BaseController
{
    //untuk menampilkan konten awal
    public function index(){
        return parent::view('register/index');

    }

    //method untuk memproses register user
    public function proses(){
        $form_data = $_POST;
        $password = '';
        if($form_data['password'] === $form_data['konfirmasi_password']){
            //cek username yang terdaftar
            $user = $this->model('UserModel')->where('username', $form_data['username']);
            if($user){
                $_SESSION['flash'] = [
                    'type' => 'negative',
                    'title' => 'Register Gagal',
                    'message' => 'Username tidak terdaftar!'
                ];
                return parent::redirect('register', 'index');
            }
            $password = $this->model('UserModel')->hash($form_data['password']);
        }
        else{
            $_SESSION['flash'] = [
                'type' => 'negative',
                'title' => 'Register Gagal',
                'message' => 'Konfirmasi Password tidak cocok'
            ];
            return parent::redirect('register', 'index');
        }
        $role = 'customer';
        $data = [
            'username' => $form_data['username'],
            'password' => $password,
            'role' => $role
        ];
        $result = $this->model('UserModel')->store($data);
        if($result){
            $this->success('Registrasi berhasil', 'Silahkan login menggunakan username anda!');
            return parent::redirect('login', 'index');
        }else{
            $this->error('Registrasi', 'Silahkan coba lagi dalam beberapa saat!');
            return parent::redirect('register', 'index');
        }
    }
}