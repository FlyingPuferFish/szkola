<form method="post">
    <input type="text" name="liczby">
    <input type="submit" value="OK">
</form>

<?php
if (isset($_POST['liczby'])) {

    // Zadanie 2.1
    $tab = explode(",", $_POST['liczby']);
    $n = count($tab);
    for ($i = 0; $i < $n; $i++) {
        $tab[$i] = (int)$tab[$i];
    }

    // Zadanie 2.2
    $min = $tab[0];
    $max = $tab[0];
    for ($i = 1; $i < $n; $i++) {
        if ($tab[$i] < $min) $min = $tab[$i];
        if ($tab[$i] > $max) $max = $tab[$i];
    }
    echo "Min: " . $min . "<br>";
    echo "Max: " . $max . "<br>";

    // Zadanie 2.3
    $suma = 0;
    for ($i = 0; $i < $n; $i++) {
        $suma += $tab[$i];
    }
    echo "Średnia: " . $suma / $n . "<br>";

    // Zadanie 2.4
    $trojki = 0;
    for ($i = 0; $i < $n; $i++) {
        $trojki += substr_count($tab[$i], "3");
    }
    echo "Ilość cyfr 3: " . $trojki . "<br>";

    // Zadanie 2.5
    sort($tab);
    print_r($tab);
    echo "<br>";

    // Zadanie 2.6
    if ($n % 2 == 1) {
        $mediana = $tab[($n - 1) / 2];
    } else {
        $mediana = ($tab[$n / 2 - 1] + $tab[$n / 2]) / 2;
    }
    echo "Mediana: " . $mediana . "<br>";

    // Zadanie 2.7
    echo $tab[0] . " " . $tab[1] . " " . $tab[2] . "<br>";
    echo $tab[$n - 3] . " " . $tab[$n - 2] . " " . $tab[$n - 1] . "<br>";

    // Zadanie 2.8
    for ($i = 0; $i < $n; $i++) {
        $tab[$i] = $tab[$i] * $tab[$i];
    }
    print_r($tab);
    echo "<br>";

    // Zadanie 2.9
    $parzyste = 0;
    $nieparzyste = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($tab[$i] % 2 == 0) {
            $parzyste++;
        } else {
            $nieparzyste++;
        }
    }
    echo "Parzyste: " . $parzyste . "<br>";
    echo "Nieparzyste: " . $nieparzyste . "<br>";

    // Zadanie 2.10
    $podzielne = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($tab[$i] % 3 == 0) {
            $podzielne++;
        }
    }
    echo "Podzielne przez 3: " . $podzielne;
}
?>
