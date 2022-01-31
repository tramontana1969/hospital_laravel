<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'side_effect',
    ];
    public function examine() {
        return $this->belongsToMany(Examine::class);
    }
}
