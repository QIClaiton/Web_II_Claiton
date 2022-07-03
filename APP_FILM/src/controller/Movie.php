<?php

namespace src\controller;
require "../../vendor/autoload.php";

use src\model\Movie;
use src\model\Director;
use src\Model\Producer;
use src\model\MovieGender;

// Criação de objetos

$producer_one = new  Producer ("Metro-Goldwyn-Mayer", "99999-9999", "Beverly Hills");
$director_one = new  Director ("Victor Fleming", null, "23/02/18");
$movie_one = new  Movie (

title: "O Magico de Oz",
duration: 112,
movieGender: MovieGender::FANTASY,
yearOfRelease:1939,
producer: $producer_one,
director: $director_one
);

echo "<pre>";
var_dump($music_one);
echo "</pre>";