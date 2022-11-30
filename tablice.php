<!DOCTYPE html>
<html>

<table style = "background-color: aliceblue ; width= 100%">
<tr>
<?php
$tabelka=range(0,10);
    shuffle($tabelka);
    foreach ($tabelka as $wiersz){
        echo "<td style='background-color: aliceblue; border: 1px solid dodgerblue; padding: 10px; text-align: center'>$wiersz<td>";
}
?>
</tr>
    </table>
<pre>
<?php
$liczby=array(rand(0, 99), rand(0, 99), rand(0,99), rand(0,99), rand(0,99));
rsort($liczby);
    foreach ($liczby as $key => $val) {
        echo "$key = $val\n";
    }
?>
</pre>
<pre>
    <?php
    $filmy=array("Skazani na Showshank"=> "dramat", "Nietykalni"=>"biogradiczny", "Władca Pierścieni: Powrót króla"=>"fantasy","Pulp Fiction"=>"gangsterski", "Siedem"=>"kryminnał", "Podziemny krąg"=>"thriller", "Django"=> "western", "Król Lew"=>"animacja", "Avengers: Wojna bez granic"=>"akcja", "Dobry zły i brzydki"=>"western");
    print_r($filmy);
    ?>
</pre>
</html>k