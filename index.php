<?php
    // $name="Alberto";
    //$name = $_GET['name'];

    $bad_paragrafh = 
    "
        Il sesso è una cosa interessante ma non ha un'importanza decisiva.
        Cioè è meno importante, dal punto di vista fisiologico, della cacata.
        Un'uomo può tirare avanti per 70 anni senza una donna ma può morire
        in una settimana se le budella non si muovono.
        Charles Bukowski.
    ";

    $lower_bad_paragrafh = strtolower($bad_paragrafh);

    // // $goodParagrafh = str_replace("sesso", "***", $badParagrafh);

    // $hide_it= "***";

    // $bad_word= $_GET['$bad_word'];

    // $hide_bad_word = str_replace($bad_word, $hide_it, $bad_paragrafh);

    $hide = $_GET["hide"];

    $lower_hide = strtolower($hide);

    $change_to = "***";
    $replace = str_replace($hide, $change_to, $bad_paragrafh);


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
    <h2>
        Testo originale:
    </h2>
    <p>
        <?php
            echo $bad_paragrafh;
        ?>
    </p>
    <h2>Testo censruato:</h2>
    <p>
        <?php
            echo $replace;
        ?>
    </p>
</body>
</html>

<!--
    Creare una variabile con un paragrafo di testo.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'user tramite il parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza
        Dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->