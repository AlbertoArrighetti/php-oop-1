<?php
require 'db.php';
?>


<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <?php include './layout/navBar.php' ?>

    <div class="container my-5 ">
        <ul class="row row-cols-3 ">
            <?php 
            foreach ($movies as $currentMovie) {
    
                echo "
                    <div class='card'>

                    <img src='". $currentMovie->posterURL ."' class='card-img-top p-3'>


                    <div class='card-body pt-1'>
                        <h6 class='mb-3'> ". $currentMovie->director->getFullDirector() ." </h6>
                        <h5 class='card-title mb-3'>". $currentMovie->title ."</h5>
                    
                        <p class='card-text'>". $currentMovie?->description ."</p>
                    
                        ". $currentMovie->isUnderAge() . "
                    </div>
                    </div>
                ";
    
            }
            ?>
        </ul>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>