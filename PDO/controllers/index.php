<?php

require '../domain/Task.php';

$query = require '../core/bootstrap.php';
$tasks = $query->selectAll('todos', 'Task');

require '../views/index.view.php';