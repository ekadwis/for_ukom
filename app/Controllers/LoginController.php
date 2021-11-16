<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class LoginController extends BaseController
{

    protected $LoginModel;

    public function __construct()
    {
        $this->LoginModel = new LoginModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Form Login'
        ];

        return view('auth/login', $data);
    }

    public function postlogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $log = $this->LoginModel->getData($username);
        if ($log == null) {
            return redirect()->to('/login');
        }

        if (password_verify($password, $log->password)) {
            $data = [
                'login' => true,
                'username' => $log->username,
                'level' => $log->level
            ];
            session()->set($data);

            return redirect()->to('/')->with('msg', 'Berhasil Login');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
