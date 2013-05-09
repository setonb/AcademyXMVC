<?php
	require '../config.php';

	class DB_QUERY {
	
		function connect($hostname, $username, $password) {
			return mysql_connect($host, $username, $password);
		}

		function db_select($database) {
			return mysql_select_db($database));
		}

		function query($query) {
			return mysql_query($query);
		}
	}
?>