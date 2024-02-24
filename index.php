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

// Definizione della classe Actor
class Actor
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
        echo "Actor: {$this->name}, Birth Year: {$this->birthYear}\n";
    }
}

// Istanziamento oggetti Actor
$leonardoDiCaprio = new Actor("Leonardo DiCaprio", 1974);
$bradPitt = new Actor("Brad Pitt", 1963);

// Istanziamento oggetti Director
$christopherNolan = new Director("Christopher Nolan", 1970);
$davidFincher = new Director("David Fincher", 1962);

// Istanziamento oggetti Movie con attori
$inception = new Movie("Inception", "Sci-Fi", 2010, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);
$fightClub = new Movie("Fight Club", "Drama", 1999, $davidFincher, [$bradPitt]);

// Stampa delle informazioni sui film e sui direttori
echo "<b>Inception:</b>\n";
$inception->displayInfo();

echo "\n<b>Fight Club:</b>\n";
$fightClub->displayInfo();

// Istanziamento oggetto Movie mancante
$provaAPrendermi = new Movie("Prova a prendermi", "Crime", 2002, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);

// Stampa delle informazioni su "Prova a prendermi"
echo "\n<b>Prova a prendermi:</b>\n";
$provaAPrendermi->displayInfo();

class Movie
{
   // Variabili d'istanza
   public $title;
   public $genre;
   public $releaseYear;
   // Variabile director
   public $director;
   // Array di attori
   public $actors;

   // Costruttore
   public function __construct($title, $genre, $releaseYear, $director, $actors)
   {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
    // Istanza di Director
    $this->director = $director;
    // Array di istanze di Actor
    $this->actors = $actors;
   }

    // Metodo
    public function displayInfo()
    {
        echo "Title: {$this->title}, Genre: {$this->genre}, Release Year: {$this->releaseYear}\n";
        // Ciclo per stampare le informazioni di ogni attore
        foreach ($this->actors as $actor) {
            $actor->displayInfo();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>

    <!-- link Bootstrap -->
</head>
<body>
    
</body>
</html>