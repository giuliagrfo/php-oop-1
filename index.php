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

    // all'interno della classe definire un costruttore
    function __construct($title, $duration, $genre, $vote)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->vote = $vote;
    }

    // all'interno della classe è definito almeno un metodo
    public function getDuration($duration)
    {
        if ($duration > 150) {
            $this->duration .= 'long movie';
        } else {
            $this->type = 'short film';
        }
    }

    public function getDetails()
    {
        return "<br>" . "Title: " . $this->title . "<br/>" .
            "Duration: " . $this->duration . "<br/>" .
            "Genre: " . $this->genre . "<br/>" .
            "Vote: " . $this->vote . "min" . "<br/>";
    }
}
$ForrestGump = new Movie('Forrest Gump', 142, 'Dramatic comedy', '4');
$ForrestGump->getDuration($ForrestGump->duration);

$Dunkirk = new Movie('Dunkirk', 106, 'Dramatic war history', '4');
$Dunkirk->getDuration($Dunkirk->duration);

// var_dump($ForrestGump);
// var_dump($Dunkirk);

echo $ForrestGump->getDetails();
echo $Dunkirk->getDetails();
