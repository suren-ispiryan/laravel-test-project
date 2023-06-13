<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialization_eng',
        'specialization_rus',
        'specialization_arm',
    ];

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
