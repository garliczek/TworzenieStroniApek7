<!DOCTYPE html>
<html>
<?php
$a=7;
$b=9;
$c=3.5;
$d=4.5;
$x=5;
$y=15;
echo "<Zmienna a ma wartość" .$a. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_int($a)); echo "<br>";
echo "Zmienna b ma wartość" .$b. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_int($b)); echo "<br>";
echo "Zmienna c ma wartość" .$c. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_int($c)); echo "<br>";
echo "Zmienna d ma wartość" .$d. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_int($d)); echo "<br>";
echo "<Zmienna a ma wartość" .$a. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_float($a)); echo "<br>";
echo "Zmienna b ma wartość" .$b. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_float($b)); echo "<br>";
echo "Zmienna c ma wartość" .$c. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_float($c)); echo "<br>";
echo "Zmienna d ma wartość" .$d. "a funkcja is_int zwraca dla niej wynik";
var_dump(is_float($d)); echo "<br>";
echo "<br> <br> <br>";
$suma=$x+$y;
echo "Wynik dodawania $x i $y wynosi $suma". "<br>";j
$suma=$x-$y;
echo "Wynik odejmowania $x i $y wynosi $suma". "<br>";
$suma=$x/$y;
echo "Wynik dzielenia $x i $y wynosi $suma". "<br>";
$suma=$x%$y;
echo "Wynik dzielenia z reszta $x i $y wynosi $suma". "<br>";
echo "<br> <br> <br>";
$j=4;
$k=35;
$suma=$j*$k;
echo "Pole prostokata o bokach dlugosci $x i $y wynosi $suma j<sup>2". "<br>";
$suma=$j+$j+$k+$k;
echo "Obwód porstokąta o bokach $x i $y wynosi $suma". "<br>"
?>
</html>