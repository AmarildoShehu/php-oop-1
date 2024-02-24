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