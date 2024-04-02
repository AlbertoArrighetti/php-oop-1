<?php

require './Models/Director.php';
require './Models/Movie.php';


$movieDirector1 = new Director('Stanley', 'Kubrick', 'British');
$movie1 = new Movie('A Clockwork Orange', true, 'English', ['Grottesco', 'Drammatico'], $movieDirector1);
$movie1->description = 'A Clockwork Orange, novel by Anthony Burgess, published in 1962. Set in a dismal dystopian England, it is the first-person account of a juvenile delinquent who undergoes state-sponsored psychological rehabilitation for his aberrant behaviour';
$movie1->posterURL = './img/A-Clockwork-Orange.webp';



$movieDirector2 = new Director('Wes', 'Craven', 'American');
$movie2 = new Movie('Nightmare', true, 'English', ['Horror'], $movieDirector2);
$movie2->posterURL = './img/Nightmare.jpg';

$movieDirector3 = new Director('Steven', 'Spielberg', 'American');
$movie3 = new Movie('Catch me if you can', false, 'English', ['Biografico', 'Commedia', 'Drammatico'], $movieDirector3);
$movie3->description = 'A true story about Frank Abagnale Jr. who, before his 19th birthday, successfully conned millions of dollars worth of checks as a Pan Am pilot, doctor, and legal prosecutor. An FBI agent makes it his mission to put him behind bars. But Frank not only eludes capture, he revels in the pursuit.';
$movie3->posterURL = './img/Catch-me-if-you-can.jpg';

$movies = [
    $movie1,
    $movie2,
    $movie3,
];
