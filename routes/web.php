<?php

use App\Http\Controllers\StudentController;
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
    //return view('welcome');
    return "hello jemish";
});
Route::get('/students',[StudentController::class,'index'])->name('students.info');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');
Route::get('/students/delete/{id}',[StudentController::class,'delete'])->name('students.delete');
Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');  //route for edit

