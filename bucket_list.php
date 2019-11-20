<?php

$myArray = array();
echo ("Hoe veel activiteiten wil je toevoegen?" . PHP_EOL);
$aantal = readline();
if (is_numeric($aantal)) {
} else {
    exit("niet numeric");
}
for ($i = 1; $i <= $aantal; $i++) {
    echo ("Wat wil je toevoegen aan jouw bucket list?"). PHP_EOL; {
        $input = readline();
        array_push($myArray, $input);
    }
}
echo ("Op jouw bucketlist staat:") . PHP_EOL;
print_r ($myArray);
?>