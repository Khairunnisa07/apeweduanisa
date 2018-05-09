<?php

spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

	$v= new src\View();
	$v->render();

	echo "<br>";

	$y= new app\View();
	$y->render();


?>