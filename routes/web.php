<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use function PHPUnit\Framework\logicalOr;

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
Route::get('/login',[StudentController::class,'login']);
Route::get('/registration',[StudentController::class,'registration']);


Route::get('student-list',[StudentController::class,'index']);
Route::get('add-student',[StudentController::class,'addStudent']);
Route::post('save-student',[StudentController::class,'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent']);
Route::post('update-student',[StudentController::class,'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent']);
