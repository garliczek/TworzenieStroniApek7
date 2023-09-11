<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href=".\style\style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        .column1 {
            float: left;
            width: 20%;
            padding: 10px;
            height: 960px;

        }
        .column2 {
            float: left;
            width: 80%;
            padding: 10px;
            height: 950px;

        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>


<div class="row">
    <div class="column1" style="background-color: deepskyblue;">
        <ul>
            <li><a href="?page=strona_glowna">Strona główna</a></li><br>
            <li><a href="?page=test_polaczenia">Test połączenia</a></li><br>
            <li><a href="?page=lista_tabel">Lista tabel</a></li><br>
            <li><a href="?page=czytelnicy">Tabela czytelnicy</a></li><br>
            <li><a href="?page=dzialy">Tabela działy</a></li><br>
            <li><a href="?page=ksiazki">Tabela książki</a></li><br>
            <li><a href="?page=pracownicy">Tabela pracownicy</a></li><br>
            <li><a href="?page=stanowiska">Tabela stanowiska</a></li><br>
            <li><a href="?page=wypozyczenia">Tabela wypożyczenia</a></li><br>
            <li><a href="?page=logowanie">Logowanie</a></li><br>
        </ul>
    </div>
    <div class="column2" style="background-color: wheat;">
        <?php
        if(isset($_GET['page']))
        {
            if(file_exists('Pages/' . $_GET['page'] . '.php'))
                include ('Pages/' . $_GET['page'] . '.php');
            else
                echo '<h2> Ta strona nie istnieje </h2>';
        }
        ?>
    </div>
</div>

</body>
</html>
