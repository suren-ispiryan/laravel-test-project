<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\SkillsController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('specialization', [SpecializationController::class, 'getSpecialization']);
Route::post('create-specialization', [SpecializationController::class, 'createSpecialization']);
Route::get('skill', [SkillsController::class, 'getSkill']);
Route::post('create-skill', [SkillsController::class, 'createSkill']);
