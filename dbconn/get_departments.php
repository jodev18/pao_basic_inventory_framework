<?php

//Function for retrieving the accountables.

function retrieveDepartmentInfo(){
	
	require('connector.php');
	
	$sqlcode = "SELECT * FROM inv_departments";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$departments = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($departments,$row);
		}
	
		return $departments;
	}
	else{
		return null;
	}
	
	
}









?>