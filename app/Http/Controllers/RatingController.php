<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->back()->withErrors(['Necessites estar logat per poder valorar un joc']);
        }
        $request->validate([
            'rating' => 'required|integer|max:5',
            'gameId' => 'required|exists:games,id'
        ]);

        Rating::create([
            'game_id' => $request->gameId,
            'rating' => $request->rating,
        ]);

        return redirect()->back();
    }
}
