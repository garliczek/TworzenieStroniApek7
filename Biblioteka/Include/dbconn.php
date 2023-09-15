<?php
$database='lasek';
$password='admin123';
$servername='localhost';
$username='lasek';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd '
        . mysqli_connect_error());
}
