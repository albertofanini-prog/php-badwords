<?php
    // $name="Alberto";
    //$name = $_GET['name'];

    $paragrafh = 
        "
        Il sesso è una cosa interessante ma non ha un'importanza decisiva.
        Cioè è meno importante, dal punto di vista fisiologico, della cacata.
        Un'uomo può tirare avanti per 70 anni senza una donna ma può morire
        in una settimana se le budella non si muovono.
        Charles Bukowski.
        "
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <h1><?php echo $paragrafh?></h1>
    <h4>Questo paragrafo ha: <?php echo strlen($paragrafh)?> caratteri.</h4>
</body>
</html>

<!--
    Creare una variabile con un paragrafo di testo.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'user tramite il parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza
        Dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->