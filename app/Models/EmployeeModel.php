<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'cin',
        'company',
        'project',
        'title',
        'phone',
        'addr',
        'localisation',
        'status',
        'onboarding',
        'offboarding',
        'created_at',
        'updated_at',
    ];
    protected $useTimestamps = true;

    // Méthode pour récupérer les employés avec le statut "Prestataire"
    public function getPrestataires()
    {
        return $this->where('status', 'Prestataire')->findAll();
    }

    // Méthode pour compter les employés avec le statut "Prestataire"
    public function countPrestataires()
    {
        return $this->where('status', 'Prestataire')->countAllResults();
    }

    // Méthode pour compter les employés avec le status "Formation"
    public function countFormations()
    {
        return $this->where('status', 'Formation')->countAllResults();
    }
}
