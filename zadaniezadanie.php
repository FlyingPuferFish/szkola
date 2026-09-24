<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Zadanie PHP</title>
</head>

<body>

<?php
    $sumaWszystkich = 0;
    $sumaParzystych = 0;
    $sumaNieparzystych = 0;
    $sumaPodzielnychPrzez3 = 0;
   for ($i = 1;$i <= 100;$i++){
    if ($i % 2 == 0){
        echo $i." - parzysta";
        $sumaParzystych += $i;
    }
    else{
         echo $i." - nieparzysta";
         $sumaNieparzystych += $i;
    }
    if($i%3 == 0){
        echo " liczba podzielna przez 3";
        $sumaPodzielnychPrzez3 += $i;
    }
    echo "</br>";
    $sumaWszystkich+=$i;

   }

    echo "Suma wszystkich: ".$sumaWszystkich."</br>";
    echo "Suma parzystych: ".$sumaParzystych."</br>";
    echo "Suma wszystkich: ".$sumaNieparzystych."</br>";
    echo "Suma wszystkich: ".$sumaPodzielnychPrzez3."</br>";


?>

</body>
</html>