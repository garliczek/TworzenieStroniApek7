<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(abs(-4.2))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(abs(5))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(abs(-5))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo min(0, 150, 30, 20, -8, -200)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo max(0, 150, 30, 20, -8, -200)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo pi()?></>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(round(3.4, 2))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(round(3.6, 2))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(round(5.045, 2))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?= var_dump(round(5.055, 2))?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo rand(900, 1000)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo sqrt(0)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?php echo sqrt(64)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold"><?phpj echo sqrt(256)?></p>
<p style="color: aliceblue; background-color: darkblue; font-weight: bold;"><?= sqrt(65536)?></p>
</body>
</html>
