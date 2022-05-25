<!-- 
    create un file index.php in cui:
    è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie {

    public $poster;
    public $title;
    public $language;
    public $vote_average;
    public $description;

    function __construct(String $poster, String $title, String $language, float $vote_average, String $description)
    {
        $this -> poster = $poster;
        $this -> title = $title;
        $this -> language = $language;
        $this -> vote_average = $vote_average;
        $this -> description = $description;
    }

    function getVote(){
        return $this->vote_average;
    }
    function setVoteRounding($vote_average){

        $this -> vote_average = round($vote_average, 0, PHP_ROUND_HALF_UP ) / 2 ;
    }

}

$films = [];

$batman = new Movie('https://image.tmdb.org/t/p/w342/8o1R5QU797hcLuvU4M9F3rOBGEY.jpg', 'TheBatman', 'en', 7.8, 'Quando un killer prende di mira l’élite di Gotham con una serie di malvagi stratagemmi, una scia di indizi criptici spinge il più grande detective del mondo a indagare nei bassifondi, incontrando personaggi come Selina Kyle alias Catwoman, Oswald Cobblepot alias il Pinguino, Carmine Falcone e Edward Nashton alias l’Enigmista. Mentre le prove iniziano a condurlo più vicino alla soluzione e la portata dei piani del malfattore diventa chiara, Batman deve stringere nuove alleanze, smascherare il colpevole e rendere giustizia all’abuso di potere e alla corruzione che da tempo affliggono Gotham City.');
$batman -> setVoteRounding(7.8);
/* var_dump($batman); */

$spiderman = new Movie ('https://image.tmdb.org/t/p/w342/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', 'Spiderman', 'en', 7.2, 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato. Ben presto si renderà conto di non aver più bisogno degli occhiali da vista e di essere in possesso di poteri molto particolari.');
$spiderman -> setVoteRounding(7.2);

$superman = new Movie ('https://image.tmdb.org/t/p/w342/ucdkkitvvTKKmfzLuiKFCirn5j2.jpg', 'Superman', 'en', 7.1, 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.');
$superman -> setVoteRounding(7.1);




array_push($films, $batman, $spiderman, $superman);



/* $films = [
    $batman,
    $spiderman,
    new Movie('https://image.tmdb.org/t/p/w342/8o1R5QU797hcLuvU4M9F3rOBGEY.jpg', 'TheBatman', 'en', 7.8, 'Quando un killer prende di mira l’élite di Gotham con una serie di malvagi stratagemmi, una scia di indizi criptici spinge il più grande detective del mondo a indagare nei bassifondi, incontrando personaggi come Selina Kyle alias Catwoman, Oswald Cobblepot alias il Pinguino, Carmine Falcone e Edward Nashton alias l’Enigmista. Mentre le prove iniziano a condurlo più vicino alla soluzione e la portata dei piani del malfattore diventa chiara, Batman deve stringere nuove alleanze, smascherare il colpevole e rendere giustizia all’abuso di potere e alla corruzione che da tempo affliggono Gotham City.'),

    new Movie ('https://image.tmdb.org/t/p/w342/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', 'Spiderman', 'en', 7.2, 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato. Ben presto si renderà conto di non aver più bisogno degli occhiali da vista e di essere in possesso di poteri molto particolari.'),

    new Movie ('https://image.tmdb.org/t/p/w342/ucdkkitvvTKKmfzLuiKFCirn5j2.jpg', 'Superman', 'en', 7.1, 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.'),

]; */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <link rel="stylesheet" href="style.css">
     <!-- Bootstrap CSS v5.0.2 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5">

    <h1 class="text-center"> MOVIES</h1>

        <div class="row row-cols-3 py-5">

            <?php foreach ($films as $film) :?>

                <div class="col">
                    <div class="card border-0">
                        <div class="card-img-top">
                            <img src="<?php echo $film->poster; ?>" alt="image <?php echo $film->title; ?>">
                        </div>
                        <!-- /.card-img-top -->

                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <?php echo $film->title; ?>
                            </h5>
                            <!-- /.card-title -->

                            <div class="card-text">
                                <div> <strong>Lingua: </strong><?php echo $film -> language ?></div>
                                <div> <strong>Voto: </strong><?php echo $film -> vote_average ?></div>
                                <div> <strong>Descrizione: </strong><?php echo $film -> description ?></div>
                            </div>
                            <!-- /.card-text -->

                        </div>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            <?php endforeach; ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    
    
</body>
</html>














