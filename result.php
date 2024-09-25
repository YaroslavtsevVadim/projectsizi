<?php
$result = require __DIR__ . '/var/www/calc.php';
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <b>Результат вычислений:</b>
    <br>
    <?= $result ?>
</body>
</html>
