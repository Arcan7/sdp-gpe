<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UserModel();
    }

    // GET /users
    public function index()
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');
        
        $data['users'] = $this->usersModel->findAll();
        return view('users/index', $data);
    }

    // GET /users/{id}
    // public function show($id = null)
    // {
    //     $data['user'] = $this->usersModel->find($id);
    //     if ($data['user']) {
    //         return view('/configuration/account', $data);
    //     } else {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
    //     }
    // }

    // GET /users/create
    public function create()
    {
        return view('users/create');
    }

    // POST /configuration/account
    public function store()
    {
        $data = $this->request->getPost();
        if ($this->usersModel->insert($data)) {
            return redirect()->to('/configuration/account');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->usersModel->errors());
        }
    }

    // GET /users/edit/{id}
    public function edit($id = null)
    {
        $data['user'] = $this->usersModel->find($id);
        if ($data['user']) {
            return view('users/edit', $data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
        }
    }

    // POST /users/update/{id}
    public function update($id = null)
    {
        $data = $this->request->getPost();
        if ($this->usersModel->update($id, $data)) {
            return redirect()->to('/users');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->usersModel->errors());
        }
    }

    // POST /users/delete/{id}
    public function delete($id = null)
    {
        if ($this->usersModel->delete($id)) {
            return redirect()->to('/users');
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
        }
    }
}
