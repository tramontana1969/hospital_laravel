<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/patients', [\App\Http\Controllers\Models\PatientController::class, 'showAll']);
Route::post('/patients', [\App\Http\Controllers\Models\PatientController::class, 'add']);
Route::get('patients/id={id}', [\App\Http\Controllers\Models\PatientController::class, 'showPatient']);
Route::get('medicine', [\App\Http\Controllers\Models\MedicineController::class, 'showAll']);
