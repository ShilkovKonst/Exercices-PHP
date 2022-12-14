<?php
//Exercice 1
$firstnames = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
echo "<h1>Firstnames are:</h1>";
foreach ($firstnames as $key => $name) {
    echo "<p>$key. $name</p>";
}

//Exercice 2
unset($firstnames[3]);
foreach ($firstnames as $key => $name) {
    echo "<p>$key. $name</p>";
}

//Exercice 3
$json = '{"Title": "Créer des jeux de A à Z avec Unity", 
    "Author": "Anthony Cardinale", 
    "Detail": { "Publisher": "D-Booker" } }';



?>