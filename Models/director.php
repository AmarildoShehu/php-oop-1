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

    // Metodo per visualizzare le informazioni del regista
    public function displayInfo()
    {
        echo "<p class='mb-0'><i class='fas fa-user'></i> Director: {$this->name}, Birth Year: {$this->birthYear}</p>";
    }
}

?>