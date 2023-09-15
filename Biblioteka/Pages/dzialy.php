<h1>Tabela dzialy</h1>
<?php

?>
<?php
$query = 'SELECT Id_dzial, Nazwa FROM dzialy';

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<br><p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    echo '<br><table><tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?page=dzialy_dodaj">&#10010;</a></th>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>' . $row['Nazwa'] . '</td><td><a class="add" href="?page=dzialy_edytor">edytuj</a></td></tr>';}}?>