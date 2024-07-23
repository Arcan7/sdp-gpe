<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmployeeModel;
use App\Controllers\BaseController;

class AccountController extends BaseController
{

    protected $usersModel;
    protected $employeeModel;

    public function __construct()
    {
        $this->usersModel = new UserModel();
        $this->employeeModel = new EmployeeModel();
    }

    // GET /users
    public function index()
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        $data['users'] = $this->usersModel->findAll();

        // Obtenez tous les employés
        $employees = $this->employeeModel->findAll();

        // Filtrer les employés sans compte
        $employeesWithoutAccount = array_filter($employees, function ($employee) {
            return !$this->usersModel->where('employees_id', $employee['employee_id'])->first();
        });

        $data['employees'] = $employeesWithoutAccount;

        return view('page/account', $data);
    }

    // POST /configuration/account
    public function store()
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password = password_hash($password, PASSWORD_BCRYPT);
        $role = $this->request->getPost('role');
        $employee_id = $this->request->getPost('employee_id');

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role,
            'employees_id' => $employee_id
        ];

        if ($this->usersModel->insert($data)) {
            return redirect()->to('/configuration/account');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->usersModel->errors());
        }
    }

    // POST /users/delete/{id}
    public function delete($id = null)
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');

        if ($this->usersModel->delete($id)) {
            return redirect()->to('/configuration/account');
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
        }
    }
}
