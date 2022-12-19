<?php
//Exercice 1
echo '<h3>Exercice 1</h3>';

$firstnames = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
echo "<h1>Firstnames are:</h1>";
foreach ($firstnames as $key => $name) {
    echo "<p>$key. $name</p>";
}
///////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 2
echo '<h3>Exercice 2</h3>';

unset($firstnames[3]);
foreach ($firstnames as $key => $name) {
    echo "<p>$key. $name</p>";
}
///////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 3
echo '<h3>Exercice 3</h3>';

$json = '{"Title": "Créer des jeux de A à Z avec Unity", 
    "Author": "Anthony Cardinale", 
    "Detail": 
    { "Publisher": "D-Booker" } }';
$json_decoded = json_decode($json, true);
function decodingJSON($value, $key)
{
    echo "<p>$key is $value</p>";
}
var_dump($json_decoded);
array_walk_recursive($json_decoded, 'decodingJSON');
///////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 4
echo '<h3>Exercice 4</h3>';

$firstnames = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
array_splice($firstnames, 4, 0, array("Leeloo"));
echo "<h1>Firstnames are:</h1>";
foreach ($firstnames as $key => $name) {
    echo "<p>$key. $name</p>";
}
//////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 5
echo '<h3>Exercice 5</h3>';

$mots = array("Le", "Chat", "Botté", "de", "Charles", "Perrault");
$mots_length = array_map("strlen", $mots);
foreach ($mots_length as $key => $name) {
    echo "<p>$key. $name</p>";
}
echo "<p>Min length in the array is " . min($mots_length) . "</p>";
echo "<p>Max length in the array is " . max($mots_length) . "</p>";

//////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 6
echo '<h3>Exercice 6</h3>';

echo "<p>l'anacyclique de 'saper' est:</p>";
echo "<p>" . strrev("saper") . "</p>";

//////////////////////////////////////////////////////////////////////////////////////////////
//Exercice 7
echo '<h3>Exercice 7</h3>';
echo "<table>";
echo "<tr>";
for ($j = 0; $j <= 10; $j++) {
    if ($j == 0)
        echo "<th>\</th>";
    else
        echo "<th>" . $j . "</th>";
}
echo "</tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        if ($j == 1)
            echo "<th>" . $j * $i . "</th>";
        echo "<td>" . $j * $i . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>