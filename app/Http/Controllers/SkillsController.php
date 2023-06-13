<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function getSkill () {
        $specializations = Specialization::get();
        return view('createSkill')->with('specializations', $specializations);
    }

    public function createSkill (Request $request) {
        $skill = Skill::create([
            'specialization_id' => $request->input('specializations'),
            'skill_eng' => $request->input('eng'),
            'skill_rus' => $request->input('rus'),
            'skill_arm' => $request->input('arm')
        ]);
        if ($skill) {
            return back();
        }
        return abort(403);
    }
}
