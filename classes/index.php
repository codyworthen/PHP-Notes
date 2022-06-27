<?php

require 'Task.php';

$task = new Task('Feed the dog');
echo $task->getDescription();

require 'index.view.php'; // pulls in everything from this path


