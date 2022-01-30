<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Models\Examine;
use App\Models\Patient;
use Illuminate\Http\Request;

class ExamineController extends Controller
{
    public function showAll() {
        return view('examine', [
            'examine' => Examine::all(),
            'patients' => Patient::all()
        ]);
    }
    public function oneExam($id) {
        return view('one_exam', ['exam' => Examine::find($id)]);
    }
    public function add(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'diagnosis' => 'required|max:64',
                    'patient_id' => 'required',
                    'date' => 'required',
                    'place' => 'required|max:28',
                    'symptoms' => 'required',
                    'medical_prescription' => 'required',
                    'doctors_name' => 'required|max:48',
                ]
            );
            $examine = new Examine($data);
            $examine->save();
        }
        return redirect('examine');
    }
}
