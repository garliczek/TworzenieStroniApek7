<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwa = $_POST['Nazwa'];
    $database='lasek';
    $password='admin123';
    $servername='localhost';
    $username='lasek';
    $mysqlProceduralConnection = mysqli_connect($servername, $username, $password, $database);;
    $query = sprintf("INSERT INTO 'dzialy' (Nazwa) VALUES ('%s');",
        mysqli_real_escape_string($mysqlProceduralConnection, $nazwa));


    if (mysqli_query($mysqlProceduralConnection, $query)) {
        echo '<h4>Nowe Dane zostały dodane</h4>';

    } else {
        echo '<h4> Bląd w czasie dodawania:</h4><br>' . mysqli_error($mysqlProceduralConnection);
    }
}
else {
    ?>
    <form action="?page=dzialy_dodaj" method="post">
        <table>
            <tr>
                <td><label for="Id_dzial">Id_dzial</label></td>
                <td><input disabled id="Id_dzial" name="Id_dzial" type="text"></td>
            </tr>
            <tr>
                <td><label for="Nazwa">Nazwa</label></td>
                <td><input id="Nazwa" maxlength="40" name="Nazwa" type="text"></td>
            </tr>
            <tr>
                <td colspan="2" style="align-items:center;"><input type="submit" value="Zapisz"></td>
            </tr>
        </table>
    </form>
<?php } ?>