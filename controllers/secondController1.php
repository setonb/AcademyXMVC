<?php
	include "Controller.php";

	class secondController1 extends Controller {


		function get($getParam) {
			$object = new DB_QUERY();
			$object->connect();
			$object->db_select();
			if(preg_match('/(?P<digit>\d+)/', $getParam)){
				$result = $object->query("Select * from products where =1;");
			} else {

				$result = $object->query("Select * from products;");
			}
			echo "<table>";
			while ($row = mysql_fetch_row($result)) {
				echo "<tr>";
			    echo "<td>" . $row[0] . "</td>";
			    echo "<td>" . $row[1] . "</td>";
			    echo "<td>" . $row[2] . "</td>";
			    echo "<td>" . $row[3] . "</td>";
			    echo "<td>" . $row[4] . "</td>";
			    echo "<td>" . $row[5] . "</td>";
			    echo "</tr>";
			}
			echo "</table>";
		}
	}
?>