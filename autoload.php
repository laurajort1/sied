<?php
/***
 * Classes autoloader
 */
spl_autoload_register(function($className) {

	$nestLvls = array("", "../", "../../");
	$directories = array("", "models/", "services/");

	foreach ($nestLvls as $lvl) {
		foreach ($directories as $dir) {
			if (file_exists($lvl . $dir . $className . ".php")) {
				require_once($lvl . $dir . $className . ".php");
				return;
			}
		}
	}

});

?>