<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class DashboardController extends BaseController
{
    protected $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
    }

    public function index()
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');

        // Récupérer les informations de l'employé associé à l'utilisateur
        // $employee = $this->employeeModel->find($user['employees_id']);

        // Passer les informations à la vue
        $data['user'] = $user;
        $data['employees'] = $this->employeeModel->findAll();

        return view('page/dashboard', $data);
    }
}
