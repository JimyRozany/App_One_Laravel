<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\EmployeesController;

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

// Route::get('/', function () {
//     return view('static.index');
// });

// this is a static pages 
Route::get('/',[StaticController::class ,'index'])->name('home');
Route::get('about',[StaticController::class ,'about'])->name('about');
Route::get('contact',[StaticController::class ,'contact'])->name('contact');
//------------------------------------------------------------------------------

// resource ==> index ,create ,store ,show ,edit and destroy methods
// employees as employees/create or employees/edit ... 
Route::resource('employees',EmployeesController::class);


