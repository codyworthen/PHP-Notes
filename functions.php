<?php

function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '<pre>';
	echo 'php has died';
}
