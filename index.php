<?php

include __DIR__ . '/models.php';
include __DIR__ . '/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <style>
        body {
            background-color: black;
        }

        .card {
            background-color: gray;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <?php foreach ($movieList as $movie) : ?>
                <div class="col-4 g-3">
                    <div class="card h-100">

                        <div class="card-body">
                            <h1> <?= $movie->name ?> </h1>
                            <img class="img-fluid" src="<?= Movies::$poster ?>" alt="<?= Movies::$poster ?>">
                            <h2>genres: <?= $movie->genres  ?></h2>
                            <h2>duration: <?= $movie->duration ?> min</h2>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>
</body>

</html>