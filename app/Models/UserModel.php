<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'uid';
    protected $allowedFields = [
        'username',
        'password',
        'email',
        'role',
        'status',
        'created_at',
        'updated_at',
        'employees_id'
    ];
    protected $useTimestamps = true;

    // Méthode pour récupérer les nombre d'utilisateurs avec le rôle "Admin"
    public function countAdmins()
    {
        return $this->where('role', 'Admin')->countAllResults();
    }

}
