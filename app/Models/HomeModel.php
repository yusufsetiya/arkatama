<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'age', 'city', 'created_at'];
}
