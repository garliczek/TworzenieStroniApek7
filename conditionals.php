<!DOCTYPE html>
<html lang="pl">
<pre>
<?php
$plusy=rand(0,10); echo "$plusy";
switch($plusy) {
    case 0:
    case 10:
        echo "Wartosc jest poza zakresem <0,10>";
        break;
    case 1:
        echo "+";
        break;
    case 2:
        echo "++";
        break;
    case 3:
        echo "+++";
        break;
    case 4:
        echo "++++";
        break;
    case 5:
        echo "+++++";
        break;
    case 6:
        echo "++++++";
        break;
    case 7:
        echo "+++++++";
        break;
    case 8:
        echo "++++++++";
        break;
    case 9:
        echo "+++++++++";
        break;
}
?>
</pre>