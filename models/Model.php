<?php
	class DB_QUERY {
		// $hostname = "localhost";
		// $username = "root";
		// $password = "passwordx";
		// $database = "northwind";

	
		function connect() {
			return mysql_connect("localhost", "root", "passwordx");
		}

		function db_select() {
			return mysql_select_db("northwind");
		}

		function query($string) {
			return mysql_query($string);
		}
	}
?>