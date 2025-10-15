<?php

class Movie
{
    public $titolo;
    public $anno;
    public $genres;

    function __construct($_titolo, $_anno, array $_genres)
    {

        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genres = $_genres;
    }

    public function isOld()
    {
        return $this->anno < 2000;
    }
}

class Genre
{
    public $genre;
    public $description;

    function __construct($_genre, $_description)
    {
        $this->genre = $_genre;
        $this->description = $_description;
    }
}

$genre_romantic = new Genre("romantic", "bla bla romantic");
$genre_drama = new Genre("drama", "bla bla drama");
$genre_fantasy = new Genre("fantasy", "bla bla fantasy");
$genre_adventure = new Genre("adventure", "bla bla adventure");

$titanic_genres = [$genre_drama, $genre_romantic];
$avatar_genres = [$genre_fantasy, $genre_adventure];

$titanic = new Movie("Titanic", 1998, $titanic_genres);
$avatar = new Movie("Avatar", 2010, $avatar_genres);


var_dump($titanic);
var_dump($avatar);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>