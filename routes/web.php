<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Students/index',[StudentController::class,'index']);
Route::get('Students/create',[StudentController::class,'create']);
Route::post('Students/submit',[StudentController::class,'submit']);
