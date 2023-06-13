<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialization_id',
        'skill_eng',
        'skill_rus',
        'skill_arm',
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class, 'user_id');
    }

}
