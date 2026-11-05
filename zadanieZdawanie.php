<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<?php


$zaliczyli = [];
$niezaliczyli = [];


$uczniowie = [
    ["imie" => "Adam",  "punkty" => 85],
    ["imie" => "Kasia", "punkty" => 92],
    ["imie" => "Marek", "punkty" => 48],
    ["imie" => "Ola",   "punkty" => 67],
    ["imie" => "Tomek", "punkty" => 35]
];


function obliczprocent($punkty)
{
    return $punkty / 100 * 100;
}


function ocena($punkty)
{
    if ($punkty >= 90) {
        return 5;
    } else if ($punkty >= 80) {
        return 4;
    } else if ($punkty >= 60) {
        return 3;
    } else if ($punkty >= 40) {
        return 2;
    } else {
        return 1;
    }
}

function czyZdal($punkty)
{
    return $punkty >= 40;
}




foreach ($uczniowie as $uczen) {
    $punkty = $uczen["punkty"];

    echo $uczen["imie"] . "<br>";
    echo "Punkty: " . $punkty . "<br>";
    echo "Procent: " . obliczprocent($punkty) . "%" . "<br>";
    echo "Ocena: " . ocena($punkty) . "<br>";

    if (czyZdal($punkty)) {
        echo "Status: ZALICZONY" . "<br>"."<br>";
    } else {
        echo "Status: NIEZALICZONY" . "<br>"."<br>";
    }
}


$liczbaUczniow = count($uczniowie);
$suma = 0;

for ($i = 0; $i < $liczbaUczniow; $i++) {
    $suma += $uczniowie[$i]["punkty"];
}

$srednia = $suma / $liczbaUczniow;



foreach ($uczniowie as $uczen) {
    if (czyZdal($uczen["punkty"])) {
        $zaliczyli[] = $uczen["imie"];
    } else {
        $niezaliczyli[] = $uczen["imie"];
    }
}

switch (true) {
    case $srednia < 40:
        $komentarz = "Bardzo słaby wynik klasy";
        break;
    case $srednia < 60:
        $komentarz = "Wynik klasy jest niezadowalający";
        break;
    case $srednia < 80:
        $komentarz = "Dobry wynik klasy";
        break;
    default:
        $komentarz = "Bardzo dobry wynik klasy";
}

echo "--------------------------------" . "<br>";
echo "PODSUMOWANIE KLASY" . "<br>"."<br>";
echo "Liczba uczniów: " . $liczbaUczniow . "<br>";
echo "Suma punktów: " . $suma . "<br>";
echo "Średnia punktów: " . round($srednia, 2) . "<br>";
echo "Zaliczyło: " . count($zaliczyli) . "<br>";
echo "Nie zaliczyło: " . count($niezaliczyli) . "<br>";

echo "Komentarz: " . $komentarz . "<br>";
    
    
    ?>
</body>
</html>