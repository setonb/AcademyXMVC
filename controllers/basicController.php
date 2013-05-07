<?php
	include "Controller.php";

	class customerController extends Controller {


		function get($getParam) {
			$object = new DB_QUERY();
			$object->connect();
			$object->db_select();
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