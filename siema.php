<!DOCTYPE html>
<html>
<table>
    <style>
        table {
            border-collapse: collapse;
        }
        th,td {
            border: 2px solid black;
            padding: 20px;
        }
        td:nth-child(even), th:nth-child(even) {
            background-color: cyan;
        }
    </style>
    <?php
    $day=array('pon', 'wto', 'śro', 'czw', 'pią', 'sob', 'nie');
    foreach ($day as &$value)
    ?>
    <tr>
        <?php
        foreach ($day as $day) {
            echo '<td>'. $day. '</td>';
        }
        ?>
    </tr>
</table>
</html>
