<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class PatientController extends Controller
{
    public function showAll() {
        return view('patients', ['patients' => Patient::all()]);
    }
    public function showPatient($id) {
        return view('one_patient', ['patient' => \App\Models\Patient::find($id)]);
    }
    public function add(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'name' => 'required|max:48',
                    'sex' => 'required|max:1',
                    'date_of_birth' => 'required',
                    'home_address' => 'required',
                ]
            );
            $patient = new \App\Models\Patient($data);
            $patient->save();
        }
        return redirect('patients');
    }
    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
              [
                  'name' => 'required|max:48',
                  'sex' => 'required|max:1',
                  'date_of_birth' => 'required',
                  'home_address' => 'required',
              ]
            );
            $patient = Patient::find($id);
            $patient->name = $data['name'];
            $patient->sex = $data['sex'];
            $patient->date_of_birth = $data['date_of_birth'];
            $patient->home_address = $data['home_address'];
            $patient->save();
        }
        return redirect()->refresh();
    }
}
