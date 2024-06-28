<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        $data = [
            'message' => 'Hello, world!'
        ];

        $this->smarty->assign($data);
        $this->smarty->display('home.tpl');
    }
}
