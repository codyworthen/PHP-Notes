<!DOCTYPE html>

<html lang="eng">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <style>

        header {
            background-color: gray;
            padding: 2em;
            text-align: center;
        }

        body {
            text-align: center;
        }

    </style>

</head>

<body>

    <header>
        <h1>
            <?php
                echo $greeting;
                ?>
        </h1>
    </header>

    <ul>
        <?php
            foreach($names as $name) {
                echo "<li>$name</li>";
            }
        ?>

        <br>

        <!-- shorthand foreach -->
        <?php foreach($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>

        <br>

        <?php
            foreach($person as $key => $feature) : ?>
                <li><strong><?= $key . ': '; ?></strong> <?= $feature; ?> </li>
            <?php endforeach; ?>
    </ul>

</body>

</html>

