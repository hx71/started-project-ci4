<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users as ModelsUsers;

class Users extends BaseController
{
    public function index()
    {
        // buat object model
        $db = new ModelsUsers();
        $result = $db->findAll();

        // kirim data ke view
        return view('users/index', ['data' => $result]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function save()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['name' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if ($isDataValid) {
            $db = new ModelsUsers();
            $db->insert([
                "name" => $this->request->getPost('name'),
                "username" => $this->request->getPost('username'),
                "password" => $this->request->getPost('password'),
                "role_id" => $this->request->getPost('role_id'),
            ]);
            return redirect()->to('users');
        }

        // tampilkan form create
        return view('users/create');
    }

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $db = new ModelsUsers();
        $result = $db->where('id', $id)->first();

        return view('users/edit', ['data' => $result]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $db = new ModelsUsers();
        $db->update($id, [
            "name" => $this->request->getPost('name'),
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "role_id" => $this->request->getPost('role_id'),
        ]);
        return redirect()->to('users');
    }

    public function delete($id)
    {
        $db = new ModelsUsers();
        $db->delete($id);
        return redirect()->to('users');
    }
}
