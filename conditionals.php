<!DOCTYPE html>
<html lang="pl">
<?php
$losowa=rand(1,30);
?>
<h2 style="text-align: center; color: darkorchid;"><?=$losowa?></h2>
<?php
if ($losowa >= 20) :
    ?>
    <h4 style="text-align: center;color: magenta;">Wylosowana liczba jest większa lub równa 20.</h4>
<?php endif; ?>
<?php if ($losowa % 2 == 0) : ?>
    <h4 style="text-align: center; color: navy;">Liczba jest parzysta</h4>
<?php else : ?>
    <h4 style="text-align: center; color: navy;">Liczba nie jest parzysta</h4>
<?php endif; ?>
<?php
if ($losowa <= 10 ) :
    ?>
    <h4 style="color: deeppink; text-align: center;">Pierwsza dziesiątka</h4>
<?php
elseif ($losowa <= 20) :
    ?>
    <h4 style="color: deeppink; text-align: center;">Druga dziesiątka</h4>
<?php else : ?>
    <h4 style="color: deeppink; text-align: center;">Trzecia dziesiątka</h4>
<?php endif; ?>


<?php
$miesiac=rand(1, 15);?>
<h1 style="border-style: solid; text-align: center"><?= $miesiac ?></h1>
<h3 style="border-style:dashed; border-bottom-color: pink; border-top-color: pink; font-family: cursive; text-align: center"><?= $miesiac ?></h3>
<?php
switch ($miesiac) {
    case 1:
    case 2:
    case 3:
        echo "I kwartal";
        break;
    case 4:
    case 5:
    case 6:
        echo "II kwartal";
        break;
    case 7:
    case 8:
    case 9:
        echo "III kwartal";
        break;
    case 10:
    case 11:
    case 12:
        echo "IV kwartal";
        break;
    default:
        echo "Błędny numer miesiąca";
}
?>
