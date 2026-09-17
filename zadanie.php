<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    <?php

    $a1 = 10;
    $b1 = 2;
    
    if ($b1 == 0) {
        echo "Nie można dzielić przez zero\n";
    } else {
        $x1 = $a1 / $b1;
        echo $x1 . "\n";
    }
    
    $a2 = 5;
    $b2 = 2;
    $c2 = 3;
    $d2 = 4;
    
    if ($b2 == 0 || $d2 == 0) {
        echo "Nie można obliczyć wyniku\n";
    } else {
        $x2 = ($a2 / $b2) + ($c2 / $d2);
        echo $x2 . "\n";
    }
    
    $a3 = 4;
    $b3 = 8;
    
    if ($b3 - 4 == 0) {
        echo "Nie można obliczyć wyniku\n";
    } else {
        $x3 = ($a3 + 6) / ($b3 - 4);
        echo $x3 . "\n";
    }
    
    $liczba4 = 7;
    
    if ($liczba4 % 2 == 0) {
        echo "Liczba jest parzysta\n";
    } else {
        echo "Liczba jest nieparzysta\n";
    }
    
    $pierwsza5 = 15;
    $druga5 = 5;
    
    if ($druga5 == 0) {
        echo "Nie można dzielić przez zero\n";
    } elseif ($pierwsza5 % $druga5 == 0) {
        echo "Liczba jest podzielna\n";
    } else {
        echo "Liczba nie jest podzielna\n";
    }
    
    $liczba6 = -5;
    
    if ($liczba6 > 0) {
        echo "Liczba jest dodatnia\n";
    } elseif ($liczba6 < 0) {
        echo "Liczba jest ujemna\n";
    } else {
        echo "Liczba jest równa 0\n";
    }
    
    $a7 = 12;
    $b7 = 45;
    $c7 = 23;
    
    echo max($a7, $b7, $c7) . "\n";
    
    $a8 = 34;
    $b8 = 12;
    $c8 = 5;
    
    $liczby8 = [$a8, $b8, $c8];
    sort($liczby8);
    
    echo implode(", ", $liczby8) . "\n";
    
    $dataUrodzenia9 = "2005-04-12";
    $dzis9 = date("Y-m-d");
    
    $urodziny9 = new DateTime($dataUrodzenia9);
    $obecnaData9 = new DateTime($dzis9);
    $wiek9 = $obecnaData9->diff($urodziny9)->y;
    
    if ($wiek9 >= 18) {
        echo "Osoba jest pełnoletnia\n";
    } else {
        echo "Osoba jest niepełnoletnia\n";
    }
    
    $znak10 = 'G';
    
    if (ctype_upper($znak10)) {
        echo "Duża litera\n";
    } elseif (ctype_lower($znak10)) {
        echo "Mała litera\n";
    } elseif (ctype_digit($znak10)) {
        echo "Cyfra\n";
    } else {
        echo "Inny znak\n";
    }
    
    $liczba11 = 353;
    
    if ($liczba11 >= 100 && $liczba11 <= 999) {
        $tekst11 = (string)$liczba11;
        if ($tekst11 == strrev($tekst11)) {
            echo "Liczba jest palindromem\n";
        } else {
            echo "Liczba nie jest palindromem\n";
        }
    } else {
        echo "Liczba nie jest trzycyfrowa\n";
    }
    
    $liczba12 = 22;
    
    if ($liczba12 >= 0 && $liczba12 <= 99) {
        $dziesiatki12 = floor($liczba12 / 10);
        $jednosci12 = $liczba12 % 10;
        
        if (($dziesiatki12 % 2 == 0 && $jednosci12 % 2 == 0) || ($dziesiatki12 + $jednosci12 == 4)) {
            echo "Warunek spełniony\n";
        } else {
            echo "Warunek niespełniony\n";
        }
    } else {
        echo "Liczba jest większa niż dwucyfrowa\n";
    }
    
    $punkty13 = 85;
    
    if ($punkty13 < 0 || $punkty13 > 100) {
        echo "Błędna liczba punktów\n";
    } else {
        if ($punkty13 >= 90) {
            echo "5\n";
        } elseif ($punkty13 >= 75) {
            echo "4\n";
        } elseif ($punkty13 >= 50) {
            echo "3\n";
        } elseif ($punkty13 >= 35) {
            echo "2\n";
        } else {
            echo "1\n";
        }
    }
    ?>
</body>
</html>