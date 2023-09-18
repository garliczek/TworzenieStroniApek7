<h1>Tabela dzialy</h1>

<div class="column">
    <?php
    $query = 'SELECT * FROM dzialy';
    $result = mysqli_query($conn, $query);

    echo mysqli_num_rows($result);

    echo '<p>Zawiera ' . mysqli_num_rows($result) . ' wierszy</p>';
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Id_dzial</th><th>Nazwa</th><th><a class="add" href="?page=dzialy_dodaj">&#10010;</a></th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
                . $row['Nazwa'] . '</td><td> <a href="?page=dzialy_edytor&id='.$row['Id_dzial'].'&Nazwa='.$row['Nazwa'].'">&#9997</a><a href="?page=dzialy_usun&id='.$row['Id_dzial'].'&Nazwa='.$row['Nazwa'].'">&#10062</a></td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    ?>
</div>

