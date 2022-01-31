<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Models\Examine;
use App\Models\Medicine;
use App\Models\Prescribed_medications;
use Illuminate\Http\Request;

class PrescribedMedicationsController extends Controller
{
    public function showAll() {
        $pres_meds = Prescribed_medications::all();
        $exams = Examine::all();
        $meds = Medicine::all();
        return view('pres_meds', [
            'pres_meds' => $pres_meds,
            'exams' => $exams,
            'meds' => $meds
        ]);
    }
    public function add(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'way_of_using' => 'required',
                    'medicine_id' => 'required',
                    'examine_id' => 'required',
                ]
            );
            $pres_med = new Prescribed_medications($data);
            $pres_med->save();
        }
        return redirect('/prescribed');
    }
    public function showOne($id) {
        $pres_med = Prescribed_medications::find($id);
        $exams = Examine::all();
        $meds = Medicine::all();
        $one_exam = Examine::find($exams->id = $pres_med->examine_id);
        $one_med = Medicine::find($meds->id = $pres_med->medicine_id);
        $other_exams = $exams->where('id', '!=', $pres_med->examine_id);
        $other_meds = $meds->where('id', '!=', $pres_med->medicine_id);
        return view('one_pres_med', [
            'pres_med' => $pres_med,
            'one_exam' => $one_exam,
            'other_exams' => $other_exams,
            'one_med' => $one_med,
            'other_meds' => $other_meds,
        ]);
    }
    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'way_of_using' => 'required',
                    'medicine_id' => 'required',
                    'examine_id' => 'required',
                ]
            );
            $pres_med = Prescribed_medications::find($id);
            $pres_med->way_of_using = $data['way_of_using'];
            $pres_med->medicine_id = $data['medicine_id'];
            $pres_med->examine_id = $data['examine_id'];
            $pres_med->save();
        }
        return redirect()->refresh();
    }
}
