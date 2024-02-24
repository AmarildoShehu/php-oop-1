<?php

include_once 'Models/director.php';
include_once 'Models/actor.php';
include_once 'Models/movie.php';

// Istanziamento degli oggetti Director
$christopherNolan = new Director("Christopher Nolan", 1970);
$davidFincher = new Director("David Fincher", 1962);

// Istanziamento degli oggetti Actor
$leonardoDiCaprio = new Actor("Leonardo DiCaprio", 1974);
$bradPitt = new Actor("Brad Pitt", 1963);

// Istanziamento degli oggetti Movie
$inception = new Movie("Inception", "Sci-Fi", 2010, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);
$fightClub = new Movie("Fight Club", "Drama", 1999, $davidFincher, [$bradPitt]);
$provaAPrendermi = new Movie("Prova a prendermi", "Crime", 2002, $christopherNolan, [$leonardoDiCaprio, $bradPitt]);

// Array di oggetti Movie
$movies = [$inception, $fightClub, $provaAPrendermi];

?>