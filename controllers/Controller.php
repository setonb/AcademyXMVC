<?php
	include "./models/Model.php";

	class Controller {

		function get($getParam) {
			$object = new DB_QUERY();
			$object->connect($hostname, $username, $password);
			$object->db_select($database);

			if($getParam !== 'all'){
				$result = $object->query("Select * from customers where customerid='$getParam';");
			} else {

				$result = $object->query("Select * from customers;");
			}

			echo "<table>";
			while ($row = mysql_fetch_row($result)) {
				echo "<tr>";
			    foreach($row as $num) {
			    	echo "<td>" . $num . "</td>";
				}
			    echo "</tr>";
			}
			echo "</table>";
		}
	}
?>