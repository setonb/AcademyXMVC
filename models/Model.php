<?php

	class DB_QUERY {
		public $hostname = 'localhost';
		public $username = 'root';
		public $password = 'passwordx';
		public $database = 'northwind';


		function connect() {
			return mysql_connect($this->hostname, $this->username, $this->password);
		}

		function db_select() {
			return mysql_select_db($this->database);
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