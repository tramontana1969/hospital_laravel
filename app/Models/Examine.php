<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examine extends Model
{
    use HasFactory;
     protected $fillable = [
         'diagnosis',
         'patient_id',
         'date',
         'place',
         'symptoms',
         'medical_prescription',
         'doctors_name',
     ];
     public function patient() {
         return $this -> belongsTo('App\Models\Patient');
     }
}
