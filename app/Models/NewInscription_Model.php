<?php

namespace App\Models;

use CodeIgniter\Model;

class NewInscription_Model extends Model{
    
    protected $table = 'new_inscription';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'full_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'position_title',
        'department',
        'application_date',
        'university',
        'major',
        'graduation_year',
        'company_name',
        'job_title',
        'employment_start_date',
        'employment_end_date',
        'responsibilities',
        'skills',
        'certification',
        'job_source',
        'date',
    ];
}