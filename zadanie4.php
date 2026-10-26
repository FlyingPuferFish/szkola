<?php
$A = array();
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 50);
}
print_r($A);
echo "<br>";

// Zadanie 4.1
$max = $A[0];
for ($i = 1; $i < 100; $i++) {
    if ($A[$i] > $max) $max = $A[$i];
}
$ile = 0;
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] == $max) $ile++;
}
echo "Max: " . $max . ", ilość: " . $ile . "<br>";

// Zadanie 4.2
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] % 2 != 0) echo $A[$i] . " ";
}
echo "<br>";

// Zadanie 4.3
for ($i = 1; $i < 100; $i += 2) {
    echo $A[$i] . " ";
}
echo "<br>";

// Zadanie 4.4
$ile = 0;
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] >= 5 && $A[$i] < 15) {
        echo $A[$i] . " ";
        $ile++;
    }
}
echo "<br>Ilość: " . $ile . "<br>";

// Zadanie 4.5
?>
<form method="get">
    <input type="number" name="a">
    <input type="submit" value="OK">
</form>
<?php
$a = isset($_GET['a']) ? (int)$_GET['a'] : 0;
$najblizszy = $A[0];
for ($i = 1; $i < 100; $i++) {
    if (abs($A[$i] - $a) < abs($najblizszy - $a)) {
        $najblizszy = $A[$i];
    }
}
echo "Najbliższy: " . $najblizszy . "<br>";

// Zadanie 4.6
$min = 0;
for ($i = 1; $i < 100; $i++) {
    if ($A[$i] < $A[$min]) $min = $i;
}
if ($min > 0) echo "Poprzednik: " . $A[$min - 1] . "<br>";
if ($min < 99) echo "Następnik: " . $A[$min + 1] . "<br>";

// Zadanie 4.7
$nowa = array();
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > 10) {
        $nowa[] = $A[$i];
    }
}
print_r($nowa);
echo "<br>";

// Zadanie 4.8
$B = array();
$B[0] = $A[0];
for ($i = 1; $i < 100; $i++) {
    $B[$i] = $B[$i - 1] + $A[$i];
}
print_r($B);
echo "<br>";

// Zadanie 4.9
rsort($A);
print_r($A);
echo "<br>";

// Zadanie 4.10
$ilosci = array_count_values($A);
foreach ($ilosci as $liczba => $ile) {
    if ($ile >= 3) echo $liczba . " ";
}
?>
