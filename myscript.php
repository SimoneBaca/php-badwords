<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paragrafo = $_POST['paragrafo'];
    $parolaDaCensurare = $_POST['parolaDaCensurare'];

    $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);
    
    echo "<p>Paragrafo: $paragrafo</p>";
    echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";
    
    include('index.php');

    $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);

    echo "<p>Paragrafo (con parole censurate): $paragrafoCensurato</p>";
    echo "<p>Lunghezza del paragrafo (con parole censurate): " . strlen($paragrafoCensurato) . "</p>";
   

}
