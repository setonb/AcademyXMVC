<?php
	include "Controller.php";

	class productController extends Controller {

		function get($getParam) {

			$object = new DB_QUERY();
			$object->connect();
			$object->db_select();
			$table = 'products';

			if($getParam !== 'all'){
				$result = $object->query($table, $getParam);
			} else {

				$result = $object->query($table, 'all');
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