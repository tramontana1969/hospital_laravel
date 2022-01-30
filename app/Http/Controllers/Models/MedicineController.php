<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function showAll() {
        return view('medicine', ['meds' => Medicine::all()]);
    }
    public function showMed($id) {
        return view('one_med', ['med' => Medicine::find($id)]);
    }
}
