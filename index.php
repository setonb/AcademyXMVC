<?php
	// if(file_exists('./config.php')) {
		function __autoload($className) {
			require($_SERVER["DOCUMENT_ROOT"]."/controllers/".$className.".php");
		}

		extract($_REQUEST);
		echo $handler;
		if($handler != "/"){

			$handler = ltrim($handler, "/");
			$handler_array = split("/", $handler);
			$controllerToLoad = $handler_array[0];

			$c = new $controllerToLoad();

			if(isset($handler_array[1])) {
				$c->get($handler_array[1]);
			} else {
				$c->get('all');
			}
		} else {
			?>
			<html>
			<head>
				<title>Index Landing Page</title>
			</head>
			<body>
				<h1>Hooray!</h1>
			</body>
			</html>
			<?php
		}

	// } else {
	// 	header('Location: ./config_creator.php');
	// }
?>