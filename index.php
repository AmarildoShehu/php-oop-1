
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <!-- Font Awesome CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div  class="container mt-5">
        <h1 class="mb-4"> Movie list</h1>
        
<?php

class Director
{
    public $name;
    public $birthYear;

    public function __construct($name, $birthYear)
    {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    public function displayInfo()
    {
        echo "<p class='mb-0'><i class='fas fa-user'></i> Director: {$this->name}, Birth Year: {$this->birthYear}</p>";
    }
}

class Actor
{
    public $name;
    public $birthYear;

    public function __construct($name, $birthYear)
    {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    public function displayInfo()
    {
        echo "<p class='mb-0'><i class='fas fa-user'></i> Actor: {$this->name}, Birth Year: {$this->birthYear}</p>";
    }
}

class Movie
{
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    public $actors;

    public function __construct($title, $genre, $releaseYear, $director, $actors)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->actors = $actors;
    }

    public function displayInfo()
    {
        echo "<div class='movie-container'>";
        echo "<h5 class='movie-title'><i class='fas fa-film'></i> Title: {$this->title}</h5>";
        echo "<p class='movie-info'><i class='fas fa-film'></i> Genre: {$this->genre}</p>";
        echo "<p class='movie-info'><i class='fas fa-calendar'></i> Release Year: {$this->releaseYear}</p>";
        $this->director->displayInfo();
        echo "<p class='movie-info'><i class='fas fa-users'></i> <strong>Actors:</strong></p><ul class='actor-list'>";
        foreach ($this->actors as $actor) {
            echo "<li>";
            $actor->displayInfo();
            echo "</li>";
        }
        echo "</ul></div>";
    }
}

$leonardoDiCaprio = new Actor("Leonardo DiCaprio", 1974);
$bradPitt = new Actor("Brad Pitt", 1963);

$christopherNolan = new Director("Christopher Nolan", 1970);
$davidFincher = new Director("David Fincher", 1962);

$inception = new Movie("Inception", "Sci-Fi", 2010, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);
$fightClub = new Movie("Fight Club", "Drama", 1999, $davidFincher, [$bradPitt]);

$provaAPrendermi = new Movie("Prova a prendermi", "Crime", 2002, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);

$movies = [$inception, $fightClub, $provaAPrendermi];

foreach ($movies as $movie) {
    $movie->displayInfo();
}

?>
    </div>
</body>
</html>

<style>
        body {
            background: linear-gradient(to right, #000000, #808080);
            color: #ffffff;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
        }

        .movie-container {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .movie-title {
            color: #ffffff;
        }

        .movie-info {
            color: #ffffff;
            margin: 1.5rem 0;
        }

        .actor-list {
            list-style: none;
            padding: 0;
        }

        .actor-list li {
            margin-bottom: 5px;
        }
    </style>