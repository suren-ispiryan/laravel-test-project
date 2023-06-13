<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Skill;

class WelcomeController extends Controller
{
    public function show () {
        $allSpecifications = Specialization::with('skill')->get();
        return view('welcome')->with('allSpecifications', $allSpecifications);
    }
}
