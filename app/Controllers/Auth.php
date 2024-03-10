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
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
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
                    'nama' => $user['name'],
                    'level' => $user['level'],
                    'islogin' => TRUE
                ]);
                return redirect()->to('/dashboard');
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

    public function processLogout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
