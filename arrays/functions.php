<?php

function dd($data): void {
	echo '<pre>';
	var_dump($data);
	echo '<pre>';
	echo 'php has died';
	die();
}

function isCompleted($boolean): string {
	if ($boolean) {
		return '&#9989';
	} else {
		return '&#x274C';
	}
}
