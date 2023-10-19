<?php

class Movies
{
    public $name;
    public $genre;
    public $duration;

    function __construct($_name)
    {
        $this->name = $_name;
    }
    public static function titleName()
    {
        return 'titolone';
    }
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= Movies::titleName(); ?></h1>
</body>

</html>