<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

}
