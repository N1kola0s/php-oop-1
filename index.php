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

    function __construct($poster, $title, $language, $vote_average, $description)
    {
        $this -> poster = $poster;
        $this -> title = $title;
        $this -> language = $language;
        $this -> vote_average = $vote_average;
        $this -> description = $description;
    }

}


$TheBatman = new Movie('https://image.tmdb.org/t/p/w342/8o1R5QU797hcLuvU4M9F3rOBGEY.jpg', 'TheBatman', 'en', 7.8, 'Quando un killer prende di mira l’élite di Gotham con una serie di malvagi stratagemmi, una scia di indizi criptici spinge il più grande detective del mondo a indagare nei bassifondi, incontrando personaggi come Selina Kyle alias Catwoman, Oswald Cobblepot alias il Pinguino, Carmine Falcone e Edward Nashton alias l’Enigmista. Mentre le prove iniziano a condurlo più vicino alla soluzione e la portata dei piani del malfattore diventa chiara, Batman deve stringere nuove alleanze, smascherare il colpevole e rendere giustizia all’abuso di potere e alla corruzione che da tempo affliggono Gotham City.');

$Spiderman = new Movie ('https://image.tmdb.org/t/p/w342/gh4cZbhZxyTbgxQPxD0dOudNPTn.jpg', 'Spiderman', 'en', 7.2, 'Peter Parker è il tipico adolescente sfigato, segretamente innamorato fin da bambino della sua vicina di casa Mary Jane, rimasto orfano dei genitori e che vive con gli zii. Durante una gita scolastica a un laboratorio scientifico Peter viene morso da un ragno geneticamente modificato. Ben presto si renderà conto di non aver più bisogno degli occhiali da vista e di essere in possesso di poteri molto particolari.');

$Superman = new Movie ('https://image.tmdb.org/t/p/w342/ucdkkitvvTKKmfzLuiKFCirn5j2.jpg', 'Superman', 'en', 7.1, 'Sul pianeta Kripton é il 1948 quando il tribunale sta giudicando tre traditori. Il presidente del tribunale manda suo figlio Kal-El in salvo sulla terra, dove a causa della diversa atmosfera assume poteri straordinari. Viene adottato da una copia diventando così Clark Kent.');

var_dump($TheBatman);
var_dump($Spiderman);
var_dump($Superman);

?>













