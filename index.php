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
        .card {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body class="bg-secondary">
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">

            <?php foreach ($movieList as $movie) : ?>
                <div class="col-6 g-3">
                    <div class="card">
                        <div class="card-header">
                            <h1> <?= $movie->name ?> </h1>
                            <div class="d-flex ">
                                <h2 class="pe-3 m-0"> <?= $movie->year  ?> </h2>
                                <h2 class=" m-0"> <?= $movie->duration ?> min</h2>
                            </div>

                        </div>
                        <div class="card-body d-flex">
                            <img class="img-fluid object-fit-cover" src="<?= Movies::$poster ?>" alt="<?= Movies::$poster ?>">
                            <div class="p-3">
                                <h2> <?= $movie->genres  ?> </h2>
                                <h2>Trama:</h2>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita omnis eligendi, vero fugiat, consequuntur debitis sint similique voluptatem incidunt officiis provident rem! Hic minus vitae maxime totam! Accusantium, sed error!</p>

                            </div>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>
</body>

</html>