<?php
	include "Controller.php";

	class productController extends Controller {


		function get($getParam) {
			$object = new DB_QUERY();
			$object->connect();
			$object->db_select();
			if(preg_match('/(?P<digit>\d+)/', $getParam)){
				$result = $object->query("Select * from products where productid=$getParam;");
			} else {

				$result = $object->query("Select * from products;");
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