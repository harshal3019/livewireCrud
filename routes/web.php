<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Student;
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

/*
|--------------------------------------------------------------------------
| Actions in livewire
|--------------------------------------------------------------------------
|
|
*/
Route::get('/action',Action::class);

/*
|--------------------------------------------------------------------------
| Property Binding in livewire
|--------------------------------------------------------------------------
*/
Route::get('/form',Form::class);

/*
|--------------------------------------------------------------------------
| CRUD  in livewire
|--------------------------------------------------------------------------
*/
Route::get('/stud',Student::class);