<?php

namespace App\Http\Controllers\Models;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function showAll() {
        return view('medicine', ['meds' => Medicine::all()]);
    }
    public function showMed($id) {
        return view('one_med', ['med' => Medicine::find($id)]);
    }
    public function add(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'name' => 'required|max:48',
                    'description' => 'required',
                    'side_effect' => 'required',
                ]
            );
            $med = new Medicine($data);
            $med->save();
        }
        return redirect('medicine');
    }
    public function edit(Request $request, $id) {
        if ($request->isMethod('post')) {
            $data = $request->validate(
                [
                    'name' => 'required|max:48',
                    'description' => 'required',
                    'side_effect' => 'required',
                ]
            );
            $med = Medicine::find($id);
            $med->name = $data['name'];
            $med->description = $data['description'];
            $med->side_effect = $data['side_effect'];
            $med->save();
        }
        return redirect()->refresh();
    }
}
