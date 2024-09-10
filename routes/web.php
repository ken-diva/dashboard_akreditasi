<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Faculty;
use App\Http\Controllers\C_StudyProgram;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::controller(C_Auth::class)->group(function () {
//     Route::get('/', 'index');
//     Route::post('/login', 'login');
//     Route::get('/logout', 'logout');
// });

Route::controller(C_Faculty::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/faculty', 'table');
    Route::get('/faculty/add/', 'add');
    Route::post('/faculty/add_data/', 'add_data');
    Route::get('/faculty/update/{id}', 'update');
    Route::post('/faculty/update_data/{id}', 'update_data');
    Route::get('/faculty/delete/{id}', 'delete');
    Route::get('/faculty/detail/{id}', 'detail');
});

Route::controller(C_StudyProgram::class)->group(function () {
    Route::get('/study_program', 'table');
    Route::get('/study_program/add/', 'add');
    Route::post('/study_program/add_data/', 'add_data');
    Route::get('/study_program/update/{id}', 'update');
    Route::post('/study_program/update_data/{id}', 'update_data');
    Route::get('/study_program/delete/{id}', 'delete');
    Route::get('/study_program/detail/{id}', 'detail');
});

// check databases
Route::get('/test', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is successful!';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Please check your configuration. Error: ' . $e->getMessage();
    }
});
