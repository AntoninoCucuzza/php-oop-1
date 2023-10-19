<?php

class Movies
{
    public $name;
    public $genres;
    public $duration;
    public static $poster = "https://picsum.photos/200/300";

    function __construct($_name, $_genres,  $_duration)
    {
        $this->name = $_name;
        $this->genres = $_genres;
        $this->duration = $_duration;
    }

    public static function poster()
    {
        return self::$poster;
    }
};
