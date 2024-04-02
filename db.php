<?php

require './Models/Director.php';
require './Models/Movie.php';

$movieDirector1 = new Director('Stanley', 'Kubrick', 'British');
$movie1 = new Movie('A Clockwork Orange', true, 'English', ['Horror'], $movieDirector1);
$movie1->description = 'A Clockwork Orange, novel by Anthony Burgess, published in 1962. Set in a dismal dystopian England, it is the first-person account of a juvenile delinquent who undergoes state-sponsored psychological rehabilitation for his aberrant behaviour';

$movieDirector2 = new Director('Wes', 'Craven', 'American');
$movie2 = new Movie('Nightmare', true, 'English', ['Grottesco', 'Drammatico'], $movieDirector2);



$movies = [
    $movie1,
    $movie2,
];

// var dump 
var_dump($movies);