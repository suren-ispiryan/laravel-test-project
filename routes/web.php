<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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


// welcome
Route::get('/', [WelcomeController::class, 'show']);
//specializations
Route::get('specialization', [SpecializationController::class, 'getSpecialization']);
Route::post('create-specialization', [SpecializationController::class, 'createSpecialization']);
Route::get('delete/{id}', [SpecializationController::class, 'delete']);
// skills
Route::get('skill', [SkillsController::class, 'getSkill']);
Route::post('create-skill', [SkillsController::class, 'createSkill']);

