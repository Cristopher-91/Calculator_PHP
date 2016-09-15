<!DOCTYPE html>

<?php

$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$doing = $_POST['doing'];
$wynik1 = $liczba1 + $liczba2;
$wynik2 = $liczba1 - $liczba2;
$wynik3 = $liczba1 * $liczba2;
$wynik4 = $liczba1 / $liczba2;


switch($doing)
{
case 'dodawanie': echo("Suma wynosi: $wynik1<br/>");
break;
case 'odejmowanie' : echo("Roznica wynosi: $wynik2<br/>");
break;
case 'mnożenie' : echo("Iloczyn wynosi: $wynik3<br/>");
break;
case 'dzielenie' :  echo("Iloraz wynosi: $wynik4<br/>");
}
?>
<br/>

<a href="index.php"> Powrót do kalkulatora </a>


</html>