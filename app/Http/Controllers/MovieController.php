<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {   
       
        // dd ($results->toSql());

        $movies = DB::select("
        SELECT *
        FROM `movies`
        WHERE `votes_nr` >= ?
        AND `movie_type_id` = ?
        ORDER BY `rating` DESC
        LIMIT 50;
        ", [
            5000,
            1
        ]);

        // $movies = Movie:: query()
        // ->where('votes_nr','>=', 5000)
        // ->where('movie_type_id', 1)
        // ->order by('rating', 'DESC')
        // ->limit(50)
        // ->get();

        // /resources/views/index/index.blade.php
        //                  index.index
        return view('movies.index', compact(
            'movies'
        ));
    }
}
