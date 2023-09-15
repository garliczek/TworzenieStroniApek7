<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $query = "INSERT INTO `dzialy` (Nazwa) VALUES ('" . $_POST['Nazwa'] . "')";

    if (mysqli_query($conn, $query)) {
        echo '<h4 class="success">Nowe dane zostały dodane</h4>';
    } else {
        echo '<h4 class="failure">Błąd w czasie dodawania:</h4><br>'
            . mysqli_error($conn);
    }
} else {
  ?>
 <form action="?page=dzialy_dodaj" method="post">-->
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


