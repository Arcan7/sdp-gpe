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
}
