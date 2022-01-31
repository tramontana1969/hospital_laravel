<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescribed_medications extends Model
{
    use HasFactory;
    protected $fillable = [
        'way_of_using',
        'medicine_id',
        'examine_id'
    ];
    protected function examine() {
        return $this->belongsTo(Medicine::class);
    }
    protected function medicine() {
        return $this->belongsTo(Examine::class);
    }
}
