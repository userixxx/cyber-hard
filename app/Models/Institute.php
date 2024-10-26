<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'contact_number'];

    public function schedules()
    {
        return $this->hasMany(InstituteSchedule::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
