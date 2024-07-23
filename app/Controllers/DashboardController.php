<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmployeeModel;

class DashboardController extends BaseController
{
    protected $userModel;
    protected $employeeModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
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

        // Récupérer le nombre total d'employés
        $totalEmployees = $this->employeeModel->countAll();

        // Récupérer le nombre total de prestataires
        $totalPrestataires = $this->employeeModel->countPrestataires();

        // Récupérer le nombre total de formations
        $totalFormations = $this->employeeModel->countFormations();

        // Récupérer le nombre total d'admins
        $totalAdmins = $this->userModel->countAdmins();

        // Récupérer les informations de l'employé associé à l'utilisateur
        // $employee = $this->employeeModel->find($user['employees_id']);

        // Passer les informations à la vue
        $data['user'] = $user;
        $data['employees'] = $this->employeeModel->findAll();
        $data['totalEmployees'] = $totalEmployees;
        $data['totalPrestataires'] = $totalPrestataires;
        $data['totalFormations'] = $totalFormations;
        $data['totalAdmins'] = $totalAdmins;

        return view('page/dashboard', $data);
    }
}
