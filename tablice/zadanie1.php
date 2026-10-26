<?php
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

// Zadanie 1.1
echo $tab1[4];
echo "<br>";
$tab1[6] = 12;

// Zadanie 1.2
$tab2 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

// Zadanie 1.3
$tab3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
print_r($tab3);
echo "<br>";

// Zadanie 1.4
$n = count($tab1);
for ($i = 0; $i < $n; $i++) {
    $tab2[$i] = $tab1[$n - 1 - $i];
}
print_r($tab2);
?>
