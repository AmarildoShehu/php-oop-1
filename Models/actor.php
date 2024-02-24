<?php

// Models/actor.php

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

    // Metodo per visualizzare le informazioni dell'attore
    public function displayInfo()
    {
        echo "<p class='mb-0'><i class='fas fa-user'></i> Actor: {$this->name}, Birth Year: {$this->birthYear}</p>";
    }
}

?>