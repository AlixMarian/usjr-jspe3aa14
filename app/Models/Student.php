<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid');
    }

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid');
    }
}
