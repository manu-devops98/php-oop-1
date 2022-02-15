<!-- esercizio: create un file Movie.php in cui:
- è definita una classe ‘Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie
{
    public $title;
    public $genres;
    public $duration;
    public $directorMovie;
    public $cast;
    public $info;
    public $plot;

    public function  __construct($title, $directorMovie, $duration)
    {
        $this->title = $title;
        $this->directorMovie = $directorMovie;
        $this->duration = $duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setGenres($genres)
    {
        if (is_array($genres)) {
            $this->genres = $genres;
        }
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration . ' ' . 'min';
    }

    public function getDirectorMovie()
    {
        return $this->directorMovie;
    }

    public function setDirectorMovie($directorMovie)
    {
        $this->directorMovie = $directorMovie;
    }

    public function getCast()
    {
        return $this->cast;
    }

    public function setCast($cast)
    {
        $this->cast = $cast;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    public function setPlot($plot)
    {
        $this->plot = $plot;
    }
}

$movie1 = new Movie('La vita è bella', 'Roberto Benigni', '140');
$movie1->setCast('pippo');
$movie1->setDuration('140');
// var_dump($movie1);
$movie2 = new Movie('Harry Potter', 'Chris Columbus', '160');
$movie2->setCast('harry e hermione');
$movie2->setInfo('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni sequi praesentium, quos harum soluta accusantium esse nemo animi quibusdam beatae repudiandae suscipit in consectetur repellendus reiciendis sint voluptas, laboriosam exercitationem?');
$movie2->setDuration('160');
// var_dump($movie2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

    <h1>Titolo film 1: <?= $movie1->title ?></h1>
    <ul>
        <li>Regista: <?= $movie1->directorMovie ?></li>
        <li>Durata: <?= $movie1->duration ?></li>
        <li>Cast: <?= $movie1->cast ?></li>
    </ul>
    <h1>Titolo film 2: <?= $movie2->title ?></h1>
    <p>Descrizione film 2: <?= $movie2->info ?></p>
</body>

</html>