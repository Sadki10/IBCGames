<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'icon',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
