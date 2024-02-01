<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $a = getenv('database.default.hostname');
        var_dump($a);
        // exit;
        return view('index');
        // return view('welcome_message');
    }
}
