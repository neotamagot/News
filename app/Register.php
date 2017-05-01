<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
