<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Zadanie PHP</title>
</head>

<body>

<?php
    <?php

    // Zadanie 1: Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 1
    for ($a1 = 1; $a1 <= 10; $a1++) {
        echo $a1 . "<br>";
    }
    
    // Zadanie 2: Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 10 w kolejności malejącej
    for ($b1 = 10; $b1 >= 1; $b1--) {
        echo $b1 . "<br>";
    }
    
    // Zadanie 3: Obliczy i wyświetli na ekranie sumę kolejnych 10 liczb całkowitych począwszy od 1
    $c1 = 0;
    for ($c2 = 1; $c2 <= 10; $c2++) {
        $c1 += $c2;
    }
    echo $c1 . "<br>";
    
    // Zadanie 4: Wyświetli na ekranie 10 kolejnych parzystych liczb całkowitych począwszy od 2
    for ($d1 = 2; $d1 <= 20; $d1 += 2) {
        echo $d1 . "<br>";
    }
    
    // Zadanie 5: Pracownik przez X miesięcy odkłada co miesiąc Y zł (8% odsetek)
    $e1 = 12;
    $e2 = 500;
    $e3 = 0;
    for ($e4 = 0; $e4 < $e1; $e4++) {
        $e3 = ($e3 + $e2) * 1.08;
    }
    echo $e3 . "<br>";
    
    // Zadanie 6: Obliczy sumę elementów ciągu arytmetycznego (100 elementów, różnica 10, pierwszy 5)
    $f1 = 100;
    $f2 = 5;
    $f3 = 10;
    $f4 = $f2 + ($f1 - 1) * $f3;
    $f5 = ($f2 + $f4) * $f1 / 2;
    echo $f5 . "<br>";
    
    // Zadanie 7: Obliczy ilość cegieł w piramidzie o podstawie 10 x 10 cegieł
    $g1 = 0;
    for ($g2 = 1; $g2 <= 10; $g2++) {
        $g1 += $g2 * $g2;
    }
    echo $g1 . "<br>";
    
    // Zadanie 8: Obliczy ilość cegieł w ścianie o podstawie X, wysokości Y, gdzie każdy rząd jest o Z krótszy
    $h1 = 20;
    $h2 = 5;
    $h3 = 2;
    $h4 = 0;
    for ($h5 = 0; $h5 < $h2; $h5++) {
        $h4 += ($h1 - ($h5 * $h3));
    }
    echo $h4 . "<br>";
    
    // Zadanie 9: Oblicza wagę ściany z 8. podpunktu, przy założeniu, że jedna cegła waży K kilogramów
    $i1 = 2.5;
    $i2 = $h4 * $i1;
    echo $i2 . "<br>";
    
    // Zadanie 10: Symulujący działanie prostego kalkulatora
    $j1 = 10;
    $j2 = 5;
    $j3 = '+';
    if ($j3 == '+') {
        echo ($j1 + $j2) . "<br>";
    } elseif ($j3 == '-') {
        echo ($j1 - $j2) . "<br>";
    } elseif ($j3 == '*') {
        echo ($j1 * $j2) . "<br>";
    } elseif ($j3 == '/') {
        if ($j2 != 0) {
            echo ($j1 / $j2) . "<br>";
        } else {
            echo "Błąd<br>";
        }
    }
    
    // Zadanie 11: Wyświetli na ekranie ciąg arytmetyczny składający się z N elementów (X, Y)
    $k1 = 10;
    $k2 = 3;
    $k3 = 4;
    for ($k5 = 0; $k5 < $k1; $k5++) {
        $k4 = $k2 + ($k5 * $k3);
        echo $k4 . "<br>";
    }
    
    // Zadanie 12: Oblicza sumę dwóch liczb podanych przez użytkownika aż suma będzie 0
    $l1 = 5;
    $l2 = -5;
    $l3 = $l1 + $l2;
    echo $l3 . "<br>";
    
    // Zadanie 13: Algorytm oblicza silnię wprowadzonej przez użytkownika liczby
    $m1 = 5;
    $m2 = 1;
    for ($m3 = 1; $m3 <= $m1; $m3++) {
        $m2 *= $m3;
    }
    echo $m2 . "<br>";
    
    // Zadanie 14: Wypisuje ciąg n liczb, z których każda kolejna jest kwadratem poprzedniej
    $n1 = 5;
    $n2 = 2;
    $n_akt = $n2;
    for ($n4 = 0; $n4 < $n1; $n4++) {
        echo $n_akt . "<br>";
        $n_akt = $n_akt * $n_akt;
    }
    
    // Zadanie 15: Oblicza sumę oraz średnią z 10 losowych liczb z przedziału <50, 100>
    $o3 = 0;
    $o_ilosc = 10;
    for ($o2 = 0; $o2 < $o_ilosc; $o2++) {
        $los = rand(50, 100);
        $o3 += $los;
    }
    echo $o3 . " " . ($o3 / $o_ilosc) . "<br>";
    
    ?>

?>

</body>
</html>