<?php

spl_autoload_register(function($class){

	$filename = dirname(__FILE__)."/".strtolower($class).'.php';
	if(file_exists($filename)){
		require($filename);
	}

	$filename = dirname(__FILE__)."/controllers/".strtolower($class).'.php';
	if(file_exists($filename)){
		require($filename);
	}

});