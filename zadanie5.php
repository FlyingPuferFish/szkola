<?php
// Zadanie 5.1
$tab = array();
$tab[0] = 0;
$tab[1] = 1;
for ($i = 2; $i < 100; $i++) {
    $tab[$i] = $tab[$i - 1] + $tab[$i - 2];
}
print_r($tab);
echo "<br>";

// Zadanie 5.2
$tab = array();
for ($i = 0; $i < 100; $i++) {
    $tab[$i] = pow(2, $i);
}
print_r($tab);
echo "<br>";

// Zadanie 5.3
$tab = array();
for ($i = 0; $i < 100; $i++) {
    $tab[$i] = 3 * ($i + 1);
}
print_r($tab);
echo "<br>";

// Zadanie 5.4
$tab = array();
$tab[0] = 2;
for ($i = 1; $i < 100; $i++) {
    $tab[$i] = $tab[$i - 1] * 2;
}
print_r($tab);
?>
