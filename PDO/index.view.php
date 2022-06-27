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

<ul>
	<?php
	foreach ($tasks as $task) : ?>
        <li>
			<?php
			if ($task->isCompleted()) : ?>
                <strike><?= $task->getDescription(); ?></strike>
			<?php
			else : ?>
				<?= $task->getDescription(); ?>
			<?php
			endif; ?>
        </li>
	<?php
	endforeach; ?>
</ul>

</body>

</html>

