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
        $exam = Examine::find($id);
        $patients = Patient::all();
        $one_patient = Patient::find($patients->id = $exam->patient_id);
        $other = $patients->where('id', '!=', $exam->patient_id);
        return view('one_exam', [
            'exam' => $exam,
            'one_patient' => $one_patient,
            'patients' => $other
        ]);
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
    public function edit(Request $request, $id) {
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
            $exam = Examine::find($id);
            $exam->diagnosis = $data['diagnosis'];
            $exam->patient_id = $data['patient_id'];
            $exam->date = $data['date'];
            $exam->place = $data['place'];
            $exam->symptoms = $data['symptoms'];
            $exam->medical_prescription = $data['medical_prescription'];
            $exam->doctors_name = $data['doctors_name'];
            $exam->save();
        }
        return redirect()->refresh();
    }
}
