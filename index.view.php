<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop index</title>
</head>
<body>

<h1><?= "Hello {$name}!"; ?></h1>

<?php
    //dd($_SERVER);
?>

<ul>
    <?php
    foreach ($person as $key => $value) {
        echo "<li><strong>{$key}:</strong> {$value}</li>";
    }
    ?>
</ul>

<p>GET name paramétere: <?= $_GET['name'] ?></p>

<?php

if ($_GET['name'] === 'Tomi') {
    echo "<p>Na végre, hogy visszatértél!</p>";
} else {
    echo "<p>Üdv újra itt, miben segíthetek?</p>";
}

if ($_GET['name'] === 'Tomi') : ?>
    <p>Short if saját neves példa igaz ága</p>
<?php else: ?>
    <p>Short if saját neves példa hamis ága</p>
<?php endif;
?>

<?php echo (int) ($_GET['name'] === 'Tomi'); // ternary statement részének magyarázata ?>
<p>Ternary operatorral kiértékelve: <?= $_GET['name'] === 'Tomi' ? "yup" : "nope" ?></p>

<p>
    5+5 =
    <?php
        $result = sum(5, 5);
        echo $result;
    ?>
</p>

</body>
</html>