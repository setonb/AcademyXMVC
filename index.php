<?php
	function __autoload($className) {
		require($_SERVER["DOCUMENT_ROOT"]."/controllers/".$className.".php");
	}

	extract($_REQUEST);

	$handler = ltrim($handler, "/");
	$handler_array = split("/", $handler);
	$controllerToLoad = $handler_array[0];

	$c = new $controllerToLoad();

	if(isset($handler_array[1])) {
		$c->get($handler_array[1]);
	} else {
		$c->get('all');
	}
?>