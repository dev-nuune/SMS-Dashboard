<?php

include('db_connect.php');

function getAllRecord($sql){
	global $con;
	$resultSet = mysqli_query($con, $sql);
	$count = mysqli_num_rows($resultSet);
	$rows = array();
	if ($count > 0) {
		while( $row = mysqli_fetch_assoc($resultSet) ){
			$rows[] = $row;
		}
		return $rows;
	}
	return "No Data.";
}

function viewTable($sql){
		global $con;
		$result = mysqli_query($con, $sql);
		$colums = $result->fetch_fields();
		
		echo"<table><thead><tr>";
		foreach ($colums as $key => $value) {
				echo "<th>".$value->name."</th>";
			}

		echo"</tr></thead><tbody>";
		while($row=$this->result->fetch_array(MYSQLI_ASSOC)){
			echo"<tr>";
			foreach ($row as $key => $value) {
				echo"<td>$value</td>";
			}
			echo"</tr>";
		}
		echo"</tbody></table>";
	}

?>