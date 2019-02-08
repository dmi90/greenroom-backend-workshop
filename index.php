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

    <h1>
        <?php

        $name = "World";
        $isMonday = false;

        $fruits = array('alma', 'korte', 'banan');

        $person = [
            'name' => 'Dani',
            'age' => 6,
            'gender' => 'férfi'
        ];

        echo "Hello {$name}!";

        ?>
    </h1>

    <pre>
    <?php
        //var_dump((int)$isMonday);
        //var_dump($fruits);
        var_dump($person);
    ?>
    </pre>


    <ul>
    <?php
        foreach ($fruits as $fruit) {
            echo "<li>{$fruit}</li>";
        }
    ?>
    </ul>

    <ul>
    <?php
        foreach ($person as $key => $value) {
            echo "<li><strong>{$key}:</strong> {$value}</li>";
        }
    ?>
    </ul>

    <p>Server:</p>
    <pre><?php var_dump($_SERVER); ?></pre>

    <p>GET:</p>
    <pre><?php var_dump($_GET); ?></pre>

</body>
</html>