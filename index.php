<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>witaj swiecie 1</p>
   <script>
    // tutaj skrypt javascript
   </script> 

    <?php
        echo "<p>witaj swiecie 2</p>";
        // $zmienna
        /*
        $zmienna_1
        $_zmienna2
        */

        $imie ="Igor";
        $nazwisko = "Kulinski";
        $wiek = 17; //integer
        $wzrost = 170.5; //float
        //$wzrost = "170.5";
        echo "<p>imie: ".$imie."<br>nazwisko: ".$nazwisko."<br>wiek: ".$wiek. " lat<br>wzrost: ".$wzrost." cm</p>";



        $a = 55;
        $b = 11;
        echo "<p>suma liczb ".$a." i ".$b." wynosi ".$a+$b."</p>";
        echo "<p> różnica liczb ".$a." i ".$b." wynosi ".$a-$b."</p>";
        echo "<p>iloczyn liczb ".$a." i ".$b." wynosi ".$a*$b."</p>";
        echo "<p>iloraz liczb ".$a." i ".$b." wynosi ".$a/$b."</p>";

        echo "<p>reszta z dzielenia (modulo) liczb ".$a." i ".$b." wynosi ".$a%$b."</p>";

        $c = $a+20; //78
        echo "<p> zwiekszenie wartosci liczby ".$a." o 20  wynosi ".$c."</p>";
    

        $c += 10; //to samo $c = #c + 10; - zwiekszenie o dowolna liczbe 
        echo $c; //85
        echo "<br>";


        $c++; //zwiekszenie o 1 (inkrementacaj)
        echo $c; //86
    
        echo "<br>";
        echo ++$c; //zmienna rosnie o jeden przed wyswietleniem
        echo "<br>";
        echo $c++; //zmienna rosnie o jeden po wyswietleniu
        echo "<br>";
        echo $c; //88
    
    
    
    //operatory porownania
    echo "<br><br><br>";
    echo $a = 55;
     echo "<br>";
    echo $b = 45;
    //czy $a rowna sie $b ($a==$b)
    //czy $a nie rowna sie $b ($a!=$b)
    // czy $a jest wieksza od $b if($a > $b)
    // czy $a jest mniejsza od $b if($a < $b)
    // czy $a jest wieksza lub rowna  $b if($a >= $b)
    // czy $a jest mniejsza lub rowna  $b if($a <= $b)
    
    if($a==$b)
    {
        echo "zmienne sa rowne";
    }
elseif($a>$b)
{
    echo  'zmienna $a jest wieksza od $b';
}
else
{
    echo  'zmienna $a jest mniejsza od $b';
}

//operatory logiczne
$a = true;
$b = true;
if($a && $b) echo "zmienne sa rowne true";
else echo "jedna ze zmiennych lub obie sa rowne false";
//&& "i"

echo"<br>";

// || "lub"
if($a==true || $b==false) echo "jedna lub obie zmienne sa rowne true";
else echo " obie zmienne sa  false";

echo"<br>";

//konkatenacja
echo 'to jest pierwsza czesc '.' a to druga czesc'; //suma dwoch ciagow znakow

echo"<br>";
$a=3;
$b=4;
echo $a.$b;



    ?> 


</body>
</html>