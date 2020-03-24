<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Controllers\Controller;

class FavoritesController extends Controller
{
    public function store(Question $question)
    {
        $question->favorites()->attach(auth()->id());

        return response()->json(null, 204);
    }

    public function destroy(Question $question)
    {
        $question->favorites()->detach(auth()->id());

        return response()->json(null, 204);
    }
}
