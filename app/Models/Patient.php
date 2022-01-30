<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sex',
        'date_of_birth',
        'home_address',
    ];
    public function examine() {
        return $this->hasMany('App\Models\Examine');
    }
}
