<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->belongsToMany(Character::class)->withPivot('qty');
    }
}
