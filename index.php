<?php

class Movie{
    private $titolo;
    public $genere;
    public $anno;
    private $pegi;
    public $img;

    function __construct($_titolo, $_genere, $_anno, $_pegi, $_img){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->pegi = $_pegi;
        $this->img = $_img;
    }

    function getTitle(){
       echo $this->titolo;
    }

    function getPegi(){
        if($this->pegi >= 18){
            $this->pegi = 'Vietato ai minori di 18 anni';
        } else if($this->pegi >= 14){
            $this->pegi = 'Vietato ai minori di 14 anni';
        } else{
            $this->pegi = 'Consigliato a tutti';
        }
        echo $this->pegi;
    }
};

$movies= [
    [
        'titolo' => 'Kill Bill',
        'generi' => 'thriller, drammatico, azione',
        'data' => '2003',
        'pegi' => 14,
        'img' => 'https://m.media-amazon.com/images/I/71nIzy6qDhL._SL1500_.jpg',
    ],
    [
        'titolo' => 'The Medium',
        'generi' => 'thriller, drammatico, horror',
        'data' => '2021',
        'pegi' => 20,
        'img' => 'https://ilgiornodeglizombi.files.wordpress.com/2021/12/medium_xlg.jpg',
    ],
    [
        'titolo' => 'Evangelion 1.0 You Are (Not) Alone',
        'generi' => 'animazione, dramma, scolastico, robottoni',
        'data' => '2013',
        'pegi' => 10,
        'img' => 'https://upload.wikimedia.org/wikipedia/it/5/54/Eva_not_alone.jpg',
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    foreach($movies as $key => $value){
        $movie = new Movie($value['titolo'], $value['generi'], $value['data'], $value['pegi'], $value['img']);
    
?>

<h1><?php $movie->getTitle(); ?></h1>
<h3> <?php echo $movie->genere ?> </h3>
<img src="<?php echo $movie->img; ?>" alt="">
<p> <?php $movie->getPegi(); ?> </p>

<?php
}
?>
</body>
</html>

<?php ?>