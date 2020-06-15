<!-- Predisponete una variabile contenente un breve testo, poi tramite le funzioni sulle stringhe di php, censurate una "badword" che viene passata in GET con *** (3 simboli di asterico). Stampate a schermo il testo censurato all'interno di un paragrafo e la lunghezza del paragrafo stesso. -->

<?php



    $mio_testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
    echo $mio_testo;

    $badword = $_GET('badword');

    $new_word = str_replace('amet', $badword, $mio_testo);


?>
