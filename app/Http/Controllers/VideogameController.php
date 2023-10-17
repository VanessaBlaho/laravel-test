<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {
        $games = DB::select("
        SELECT *
        FROM `movies`
        WHERE `votes_nr` >= ?
        AND `movie_type_id` = ?
        ORDER BY `rating` DESC
        LIMIT 50;
                
        ", [
            5000,
            7
        ]);

        // /resources/views/index/index.blade.php
        //                  index.index
        return view('games.index', compact(
            'games'
        ));
    }
}
