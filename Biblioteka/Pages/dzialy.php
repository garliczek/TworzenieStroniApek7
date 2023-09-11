<h1>Tabela dzialy</h1>
<?php
$servername = "localhost";
$username = "lasek";
$password ="admin123";
$database = "lasek";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
        . mysqli_connect_error());
}
?>
<?php
$query = 'SELECT Id_dzial, Nazwa FROM dzialy';

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
echo '<table>';
    echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?page=dzialy_dodaj">&#10010;</a></th></th>';
        while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
            . $row['Nazwa'] . ' </td><td>' .'</td></tr>';
    }
    echo '</table>';
}
else {
echo 'brak danych';
}
?>
