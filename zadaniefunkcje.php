<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>FUNKCJE</title>
</head>
<body>
Zad1
<form method="post">
    Liczba 1: <input type="number" name="a"><br>
    Liczba 2: <input type="number" name="b"><br>
    <input type="submit" value="Oblicz" name="zad1">
</form>
Zad2
<form method="post">
    Liczba 1: <input type="number" name="a"><br>
    Liczba 2: <input type="number" name="b"><br>
    <input type="submit" value="Oblicz" name="zad2">
</form>
Zad3
<form method="post">
    Liczba 1: <input type="number" name="a"><br>
    Liczba 2: <input type="number" name="b"><br>
    Znak (+ - * /): <input type="text" name="znak"><br>
    <input type="submit" value="Oblicz" name="zad3">
</form>
Zad4
<form method="post">
    Liczba 1: <input type="number" name="a"><br>
    Liczba 2: <input type="number" name="b"><br>
    Liczba 3: <input type="number" name="c"><br>
    <input type="submit" value="Oblicz" name="zad4">
</form>
Zad5
<form method="post">
    Wzrost (cm): <input type="number" name="wzrost"><br>
    <input type="submit" value="Sprawdz" name="zad5">
</form>
Zad6
<form method="post">
    Wzrost (cm): <input type="number" name="wzrost"><br>
    Waga (kg): <input type="number" name="waga"><br>
    <input type="submit" value="Oblicz" name="zad6">
</form>
Zad7
<form method="post">
    Data 1 (RRRR-MM-DD): <input type="text" name="data1"><br>
    Data 2 (RRRR-MM-DD): <input type="text" name="data2"><br>
    <input type="submit" value="Sprawdz" name="zad7">
</form>
Zad8
<form method="post">
    Rok: <input type="number" name="rok"><br>
    <input type="submit" value="Sprawdz" name="zad8">
</form>
Zad9
<form method="post">
    Haslo: <input type="text" name="haslo"><br>
    <input type="submit" value="Sprawdz" name="zad9">
</form>
Zad10
<form method="post">
    Bok a: <input type="number" name="a"><br>
    Bok b: <input type="number" name="b"><br>
    Bok c: <input type="number" name="c"><br>
    <input type="submit" value="Sprawdz" name="zad10">
</form>
Zad11
<form method="post">
    Tekst: <input type="text" name="tekst"><br>
    <input type="submit" value="Szyfruj" name="zad11">
</form>

<div id="wynik">
<?php
function suma($a, $b) {
    return $a + $b;
}

function podstawy($a, $b) {
    echo "Roznica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    echo "Iloraz: " . ($a / $b) . "<br>";
}

function kalkulator($a, $b, $znak) {
    if ($znak == "+") return $a + $b;
    if ($znak == "-") return $a - $b;
    if ($znak == "*") return $a * $b;
    if ($znak == "/") return $a / $b;
}

function maks($a, $b, $c) {
    $najwieksza = $a;
    if ($b > $najwieksza) $najwieksza = $b;
    if ($c > $najwieksza) $najwieksza = $c;
    return $najwieksza;
}

function wzrost($w) {
    if ($w < 150) return "niski";
    if ($w > 180) return "wysoki";
    return "przecietny";
}

function bmi($wzrost, $waga) {
    $bmi = $waga / (($wzrost / 100) * ($wzrost / 100));
    echo "BMI: " . $bmi . " - ";
    if ($bmi < 18.5) echo "niedowaga";
    elseif ($bmi > 25) echo "nadwaga";
    else echo "OK";
}

function starszy($data1, $data2) {
    if ($data1 < $data2) return "Starsza jest osoba 1";
    if ($data1 > $data2) return "Starsza jest osoba 2";
    return "Sa w tym samym wieku";
}

function przestepny($rok) {
    if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) return "Rok przestepny";
    return "Rok nieprzestepny";
}

function sila($haslo) {
    $cyfra = false;
    $duza = false;
    $mala = false;
    $specjalny = false;

    for ($i = 0; $i < strlen($haslo); $i++) {
        $znak = $haslo[$i];
        if ($znak >= "0" && $znak <= "9") $cyfra = true;
        elseif ($znak >= "A" && $znak <= "Z") $duza = true;
        elseif ($znak >= "a" && $znak <= "z") $mala = true;
        else $specjalny = true;
    }

    $punkty = 0;
    if (strlen($haslo) >= 8) $punkty++;
    if ($cyfra) $punkty++;
    if ($duza) $punkty++;
    if ($mala) $punkty++;
    if ($specjalny) $punkty++;
    return "Sila hasla: $punkty/5";
}

function trojkat($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) return "Mozna zbudowac trojkat";
    return "Nie mozna zbudowac trojkata";
}

function szyfr($tekst) {
    $alfabet = "abcdefghijklmnopqrstuvwxyz";
    $wynik = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $nowy = $tekst[$i];
        for ($j = 0; $j < 26; $j++) {
            if ($tekst[$i] == $alfabet[$j]) {
                $nowy = $alfabet[($j + 2) % 26];
            }
        }
        $wynik .= $nowy;
    }
    return $wynik;
}

if (isset($_POST["zad1"])) echo "Suma: " . suma($_POST["a"], $_POST["b"]);
if (isset($_POST["zad2"])) podstawy($_POST["a"], $_POST["b"]);
if (isset($_POST["zad3"])) echo "Wynik: " . kalkulator($_POST["a"], $_POST["b"], $_POST["znak"]);
if (isset($_POST["zad4"])) echo "Najwieksza: " . maks($_POST["a"], $_POST["b"], $_POST["c"]);
if (isset($_POST["zad5"])) echo "Wzrost: " . wzrost($_POST["wzrost"]);
if (isset($_POST["zad6"])) bmi($_POST["wzrost"], $_POST["waga"]);
if (isset($_POST["zad7"])) echo starszy($_POST["data1"], $_POST["data2"]);
if (isset($_POST["zad8"])) echo przestepny($_POST["rok"]);
if (isset($_POST["zad9"])) echo sila($_POST["haslo"]);
if (isset($_POST["zad10"])) echo trojkat($_POST["a"], $_POST["b"], $_POST["c"]);
if (isset($_POST["zad11"])) echo "Zaszyfrowane: " . szyfr($_POST["tekst"]);
?>
</div>
</body>
</html>
