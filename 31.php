
<html>
<head>
    <style>
        td{
            border: 2px solid black;
            text-align: center;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
<body>
<table>
    <caption style><?=date('t')?></caption>
    <?php
    $date = date('t');
    $jeden=1;
    for($jeden=1; $jeden<=31; $jeden++){
        if($jeden%7==0){
            echo'<tr>';
        }
        if($jeden%7!=0) {
            echo'<td>'. $jeden.''.'</td>';
        }
        if($jeden%7==0) {
            echo '</tr>';
        }
    }
    ?>
</table>
</body>f
</head>
</html>