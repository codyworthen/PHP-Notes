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
                $greeting = "Hello";
                $name = $_GET["name"]; // gets the value associated with 'name' in the url param

                echo $greeting . ", " . $name . "!"; // . is the concat operator
            ?>
        </h1>

        <h2>
            <?= "Good morning, " . $_GET["name"] ?>  <!--shorthand to interpret some php and echo some text-->
        </h2>
    </header>

    <h2>
        <?= "Greetings, " . htmlspecialchars($_GET["name"]) ?>
    </h2>

</body>

</html>

