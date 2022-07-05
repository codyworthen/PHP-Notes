<?php

require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri());

echo "<br> var_dump(\$_SERVER): --> (returns an associative array) <br> <br>";
var_dump($_SERVER);
