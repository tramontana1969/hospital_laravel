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
Route::get('/patients/delete/id={id}', [\App\Http\Controllers\Models\PatientController::class, 'delete']);
Route::get('/patients/id={id}', [\App\Http\Controllers\Models\PatientController::class, 'showPatient']);
Route::post('/patients/id={id}', [\App\Http\Controllers\Models\PatientController::class, 'edit']);

Route::get('/medicine', [\App\Http\Controllers\Models\MedicineController::class, 'showAll']);
Route::post('/medicine', [\App\Http\Controllers\Models\MedicineController::class, 'add']);
Route::get('/medicine/delete/id={id}', [\App\Http\Controllers\Models\MedicineController::class, 'delete']);
Route::get('/medicine/id={id}', [\App\Http\Controllers\Models\MedicineController::class, 'showMed']);
Route::post('/medicine/id={id}', [\App\Http\Controllers\Models\MedicineController::class, 'edit']);

Route::get('/examine', [\App\Http\Controllers\Models\ExamineController::class, 'showAll']);
Route::post('/examine', [\App\Http\Controllers\Models\ExamineController::class, 'add']);
Route::get('/examine/delete/id={id}', [\App\Http\Controllers\Models\ExamineController::class, 'delete']);
Route::get('/examine/id={id}', [\App\Http\Controllers\Models\ExamineController::class, 'oneExam']);
Route::post('/examine/id={id}', [\App\Http\Controllers\Models\ExamineController::class, 'edit']);

Route::get('/prescribed', [\App\Http\Controllers\Models\PrescribedMedicationsController::class, 'showAll']);
Route::post('/prescribed', [\App\Http\Controllers\Models\PrescribedMedicationsController::class, 'add']);
Route::get('/prescribed/delete/id={id}', [\App\Http\Controllers\Models\PrescribedMedicationsController::class, 'delete']);
Route::get('/prescribed/id={id}', [App\Http\Controllers\Models\PrescribedMedicationsController::class, 'showOne']);
Route::post('/prescribed/id={id}', [App\Http\Controllers\Models\PrescribedMedicationsController::class, 'edit']);
