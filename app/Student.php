<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function registers()
    {
        return $this->hasMany(Register::class);
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
}
