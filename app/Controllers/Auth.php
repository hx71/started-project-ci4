<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    protected $title, $session, $modelUsers;

    public function __construct()
    {
        $this->title = "auth";
        $this->modelUsers = new Users();
    }
    public function login(): string
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $date = date('Ymd');
        if ($date > '20240215') {
            return redirect()->to('/auth/login');
        }
        //ambil data dari form
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //ambil data user di database yang usernamenya sama 
        $user = $this->modelUsers->where('username', $username)->first();
        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                    'role' => $user['role'],
                    'sekolah_id' => $user['sekolah_id'],
                    'islogin' => TRUE
                ]);
                return redirect()->to('/');
            } else {
                return redirect()->to('/auth/login');
            }
        } else {
            // session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function register(): string
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $result = $this->modelUsers->insert([
            "name" => $this->request->getPost('name'),
            "email" => $this->request->getPost('email'),
            "username" => $this->request->getPost('username'),
            "password" =>  password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            "role" => 'A',
        ]);

        if ($result) {
            return redirect()->to('/auth/login');
        }
        return redirect()->to('/auth/register');
    }
}
