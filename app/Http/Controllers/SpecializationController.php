<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    public function getSpecialization () {
        return view('createSpecialization');
    }

    public function createSpecialization (Request $request) {
        $specialization = Specialization::create([
            'specialization_eng' => $request->input('eng'),
            'specialization_rus' => $request->input('rus'),
            'specialization_arm' => $request->input('arm')
        ]);
        if ($specialization) {
            return back();
        }
        return abort(403);
    }

    public function delete ($id) {
        $deletedItem = Specialization::where('id', $id)->delete();
        return back();
    }
}
