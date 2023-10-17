<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieeController extends Controller
{
    public function shawshank ()
    {
    $moviee = DB::selectOne('
    SELECT *
    FROM `movies`
    WHERE `id` = ?
', [
    111161
]);

$all_people = DB::select("
SELECT `positions`.`name` AS position_name, `people`.*
FROM `movie_person`
LEFT JOIN `positions`
    ON `movie_person`.`position_id` = `positions`.`id`
LEFT JOIN `people`
    ON `movie_person`.`person_id` = `people`.`id`
WHERE `movie_person`.`movie_id` = ?
", [
$moviee->id
]);

$people_sorted_by_position = [];
foreach ($all_people as $person) {
    $people_sorted_by_position[$person->position_name][] = $person;
}

return view('movies.detail', [
    'movie' => $moviee,
    'people' => $people_sorted_by_position
]);
}
}