<?php
	// require 'config.php';
	global $hostname = 'localhost';
	global $username = 'root';
	global $password = 'passwordx';
	global $database = 'northwind';

	class DB_QUERY {
	
		function connect() {
			return mysql_connect($hostname, $username, $password);
		}

		function db_select() {
			return mysql_select_db($database);
		}

		function query($table, $scope) {
			if($scope != 'all'){
				return mysql_query("Select * from $table where ".trim($table)."id='$scope'");
			} else {
				return mysql_query("Select * from $table");			
			}
		}
	}
?>