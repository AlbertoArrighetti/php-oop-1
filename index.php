<?php

/**
 * Class for a single movie
 */
class Movie {
    // attributes
    public $title;
    public $description;
    public $language;
    public $underage;

    public $genres;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  boolean $_underage
     * @param  string $_language
     * @param  array $_genres
     */
    function __construct($_title, $_underage, $_language, array $_genres)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->underage = $_underage;

        $this->genres = $_genres;
    }

    // metodo
    public function isUnderAge() {
        if ($this->underage) {
            return 'Questo film non è adatto ai minori di 18 anni';
        } else {
            return 'Questo film è adatto ai minori di 18 anni';
        }
    }
}

$movie1 = new Movie('A Clockwork Orange', true, 'English', ['Horror']);
$movie1->description = 'A Clockwork Orange, novel by Anthony Burgess, published in 1962. Set in a dismal dystopian England, it is the first-person account of a juvenile delinquent who undergoes state-sponsored psychological rehabilitation for his aberrant behaviour';

$movie2 = new Movie('Nightmare', true, 'English', ['Grottesco', 'Drammatico']);

$movies = [
    $movie1,
    $movie2,
];

// var dump 
var_dump($movies);
?>













<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <h1>Film List</h1>

    <ul>
        <?php 
        foreach ($movies as $currentMovie) {

            echo "
            <li class='mb-3'>
                " . $currentMovie->title . ", ". $currentMovie->language ." <br>
                " . $currentMovie?->description . "
                " . $currentMovie->isUnderAge() ."

            </li>
            ";

        }
        ?>
    </ul>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>