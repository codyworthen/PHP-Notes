<?php

$router->define([
					'' => 'controllers.index.php',
					'about' => 'controllers/about.php',
					'about/culture' => 'controllers/about-culture.view.php',
					'contact' => 'controllers/contact.php'
				]);