<?php

//proprieta 
class Movie
{
   // Variabili d'istanza
   public $title;
   public $genre;
   public $releaseYear;

   // Costruttore
   public function __construct($title, $genre, $releaseYear) {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
    }

    // Metodo
    public function displayInfo() {
        echo "Title: {$this->title}, Genre: {$this->genre}, Release Year: {$this->releaseYear}\n";
    }
}

// Istanziamento oggetti Movie
$inception = new Movie("Inception", "Sci-Fi", 2010);
$provaAPrendermi = new Movie("Prova a prendermi", "Crime", 2002);
$fightClub = new Movie("Fight Club", "Drama", 1999);