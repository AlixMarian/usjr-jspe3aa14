<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid');
    }
}

