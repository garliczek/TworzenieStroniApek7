<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ol style="margin-left: 40px; list-style: upper-roman;">

    <?php
    for ($x = 1; $x <= 10; $x++) {
        echo "<li>To jest $x, element listy <br>";
    }
    ?>
</ol>
<ol>
    <table style="border-collapse: collapse;">
        <tr>

            <?php

            $znaki=str_split("Kon'nichiwa sekai");
            foreach ($znaki as $znak){
                echo "<td style='border: 1px dotted red;padding: 15px'>$znak</td>";
            }

            ?>
        </tr>
    </table>
</ol>
<table style="border-collapse: collapse">

<?php
$x = 1;
while($x <= 5) {
    echo "<tr><td style='background-color: lightgrey; padding: 10px'>To jest wiersz numer: "  .$x++." </td></tr>";
}
?>
</table>
<table>
<?php
$x = 6;

do {
    echo "<td style='background-color: yellowgreen'>To jest kolumna numer: $x </td><br>";
    $x++;
} while ($x <= 5);
?>
</table>
</body>
</html>