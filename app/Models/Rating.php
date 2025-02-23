<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating',
        'game_id',
    ];

    public function game()
    {
        return $this->belongsTo(game::class);
    }

    protected function casts()
    {
        return [
            'rating' => 'boolean',
        ];
    }
}
