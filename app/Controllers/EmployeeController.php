<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class EmployeeController extends BaseController
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

        return view('page/employee', $data);
    }

    public function store()
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');

        // Récupérer les informations de l'employé associé à l'utilisateur
        // $employee = $this->employeeModel->find($user['employees_id']);

        // Récupérer les informations du formulaire
        $matricule = $this->request->getPost('matricule');
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $cin = $this->request->getPost('cin');
        $project = $this->request->getPost('project');
        $title = $this->request->getPost('title');
        $phone = $this->request->getPost('phone');
        $addr = $this->request->getPost('addr');
        $location = $this->request->getPost('location');
        $status = $this->request->getPost('status');
        $onboarding = $this->request->getPost('onboarding');
        $offboarding = $this->request->getPost('offboarding');

        // Créer un tableau associatif avec les informations
        $data = [
            'matricule' => $matricule,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'cin' => $cin,
            'company' => "Groupe Externalisation", 
            'project' => $project,
            'title' => $title,
            'phone' => $phone,
            'addr' => $addr,
            'location' => $location,
            'status' => $status,
            'onboarding' => $onboarding,
            'offboarding' => $offboarding,
        ];

        // Insérer les informations dans la base de données
        $this->employeeModel->insert($data);

        // Rediriger vers la page des employés
        return redirect()->to('/configuration/employees');
    }

    public function delete($id)
    {
        $session = session();

        if (!$session->has('user')) {
            return redirect()->to('/auth/login');
        }

        // Récupérer les informations de l'utilisateur
        $user = $session->get('user');

        // Récupérer les informations de l'employé associé à l'utilisateur
        // $employee = $this->employeeModel->find($user['employees_id']);

        // Supprimer l'employé de la base de données
        $this->employeeModel->delete($id);

        // Rediriger vers la page des employés
        return redirect()->to('/configuration/employees');
    }
}
