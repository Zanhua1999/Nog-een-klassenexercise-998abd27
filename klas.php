<?php
$lokaal = readline("Wie zit er in de klas" . PHP_EOL);


$namen = explode(" ", $lokaal);

echo "De studenten in de klas zijn:" . PHP_EOL;

foreach ($namen as $friend) {
    print($friend . PHP_EOL);
}
?>