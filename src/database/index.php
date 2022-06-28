<?php

// file paths in PHP are always relative to the first file path, in this case index.php

require 'core/bootstrap.php';

try {
	require Router::load('routes.php')->direct(Request::uri());
} catch (Exception $e) {
	die($e->getMessage());
}