<?php
class Movie
{
    // Variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    public $actors;

    // Costruttore
    public function __construct($title, $genre, $releaseYear, $director, $actors)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->actors = $actors;
    }

    // Metodo per visualizzare le informazioni del film
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

?>