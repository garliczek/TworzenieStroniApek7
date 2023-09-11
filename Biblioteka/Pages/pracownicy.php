<h1>Tabela pracownicy</h1>

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
$query = 'SELECT * FROM pracownicy';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Id_stanowisko</th><th>Miasto</th><th>Data_zatrudnienia</th><th>Wynagrodzenie</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_pracownika'] . '</td><td>' . $row['Nazwisko'] . '</td><td>'. $row['Imie'] . '</td><td>' . $row['Id_stanowisko'] . '</td><td>' . $row['Miasto'] . '</td><td>' . $row['Data_zatrudnienia'] . '</td><td>' . $row['Wynagrodzenie'] . '</td>';
    }
    echo '</table>';
} else {
    echo 'brak danych';
}
?>
