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


    
    // construct    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  string $_description
     * @param  boolean $_underage
     */
    function __construct($_title, $_description, $_underage)
        {
            $this->title = $_title;
            $this->description = $_description;
            $this->underage = $_underage;
        }


    // metodo
    public function isUnderAge() {
        if ($this->underage) {
            echo 'Questo film non è adatto ai minori di 18 anni';
        } else {
            echo 'Questo film è adatto ai minori di 18 anni';
        }
    }
}





?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <h1>Hello</h1>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>