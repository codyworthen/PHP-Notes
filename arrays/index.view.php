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

    </style>

</head>

<body>

<header>
    <h1>
		<?php
		echo $header;
		?>
    </h1>
</header>

<ul>
	<?php
	foreach ($names as $name) {
		echo "<li>$name</li>";
	}
	?>
</ul>

<ul>
    <!-- shorthand foreach -->
	<?php
	foreach ($names as $name) : ?>
        <li><?= $name; ?></li>
	<?php
	endforeach; ?>
</ul>

<ul>
	<?php
	
	foreach ($person as $key => $feature) : ?>
        <li><strong><?= ucwords($key) . ': '; ?></strong> <?= ucwords($feature); ?> </li>
	<?php
	endforeach; ?>

</ul>

<ul>
    <li>
        <strong>Name:</strong>
		<?= $task['name']; ?>
    </li>

    <li>
        <strong>Due:</strong>
		<?php
		$format = $task['due']->format('M-d-Y');
		echo $format;
		?>
    </li>

    <li>
        <strong>Assigned To:</strong>
		<?php
		echo $task['assignedTo'];
		?>
    </li>

    <li>
        <strong>Completed:</strong>
		<?php
		echo isCompleted($task['completed']);
		?>
    </li>

    <li>
        <strong>Impossible:</strong>
		<?php
		echo isCompleted($task['impossible']);
		?>
    </li>
</ul>

</body>

</html>

