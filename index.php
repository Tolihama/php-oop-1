<?php
class Movie {
    public $title;
    public $director;
    public $year;

    function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function yearsOld() {
        $nowYear = 2021;
        return $nowYear - $this->year;
    }
}

$movie1 = new Movie('Jurassic Park', 'Steven Spielberg', 1993);
$movie2 = new Movie('Avatar', 'James Cameron', 2009);
var_dump($movie1, $movie2);

echo "'{$movie1->title}' è un film diretto da {$movie1->director} di {$movie1->yearsOld()} anni fa (anno: {$movie1->year}).";
echo '<br>';
echo "'{$movie2->title}' è un film diretto da {$movie2->director} di {$movie2->yearsOld()} anni fa (anno: {$movie2->year}).";