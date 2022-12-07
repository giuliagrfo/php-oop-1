<!-- 
Definire una classe ‘Movie’
- all'interno della classe sono dichiarate delle variabili d'istanza
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie
{
    // all'interno della classe dichiarare delle variabili d'istanza
    public $title;
    public $duration;
    public $genre;
    public $vote;

    // - all'interno della classe è definito un costruttore
    function __construct($title, $duration, $genre, $vote)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->vote = $vote;
    }
}
