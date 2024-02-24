<?php

class Director
{
    // Variabili d'istanza
    public $name;
    public $birthYear;

    // Costruttore
    public function __construct($name, $birthYear)
    {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    // Metodo
    public function displayInfo()
    {
        echo "Director: {$this->name}, Birth Year: {$this->birthYear}\n";
    }
}

// Istanziamento oggetti Director
$christopherNolan = new Director("Christopher Nolan", 1970);
$davidFincher = new Director("David Fincher", 1962);

// Istanziamento oggetti Movie con direttori
$inception = new Movie("Inception", "Sci-Fi", 2010, $christopherNolan);
$provaAPrendermi = new Movie("Prova a prendermi", "Crime", 2002, $christopherNolan);
$fightClub = new Movie("Fight Club", "Drama", 1999, $davidFincher);

// Stampa delle informazioni sui film e sui direttori
echo "<b>Inception:</b>\n";
$inception->displayInfo();

echo "\n<b>Prova a prendermi:</b>\n";
$provaAPrendermi->displayInfo();

echo "\n<b>Fight Club:</b>\n";
$fightClub->displayInfo();

class Movie
{
   // Variabili d'istanza
   public $title;
   public $genre;
   public $releaseYear;
   // Variabile director
   public $director;

   // Costruttore
   public function __construct($title, $genre, $releaseYear, $director)
   {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
    // Istanza di Director
    $this->director = $director;
   }

    // Metodo
    public function displayInfo()
    {
        echo "Title: {$this->title}, Genre: {$this->genre}, Release Year: {$this->releaseYear}\n";
        // Chiamata al metodo displayInfo di Director
        $this->director->displayInfo();
    }
}
?>