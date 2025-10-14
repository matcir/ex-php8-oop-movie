<?php

class Movie
{
    public $titolo;
    public $anno;
    public $genre;

    function __construct($_titolo, $_anno, Genre $_genre)
    {

        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genre = $_genre;
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

$genre_titanic = new Genre("romantic", "bla bla titanic");
$genre_avatar = new Genre("fantasy", "bla bla avatar");

$titanic = new Movie("Titanic", 1998, $genre_titanic);
$avatar = new Movie("Avatar", 2010, $genre_avatar);


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