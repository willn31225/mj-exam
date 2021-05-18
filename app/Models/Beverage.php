<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'caffeine_level'];

    public function users()
    {
        $this->belongsTo('App\Models\User');
    }
}
