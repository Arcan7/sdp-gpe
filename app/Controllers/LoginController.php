<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class LoginController extends BaseController
{

    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UserModel();
    }

    public function index(): string
    {
        return view('auth/login');
    }

    public function login()
    {
        $session = session();
        $request = $this->request;

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $username = $request->getPost('username');
        $password = $request->getPost('password');

        $model = new UserModel();
        $user = $model->where('username', $username)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Nom d\'utilisateur introuvable');
            return redirect()->to('/auth/login');
        }

        if (!password_verify($password, $user['password'])) {
            $session->setFlashdata('error', 'Le mot de passe est incorrect');
            return redirect()->to('/auth/login');
        }

        $session->set('user', $user);

        return redirect()->to('/dashboard');
    }
}
