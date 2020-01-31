<?php

//Function for retrieving the accountables.

function retrieveItemTypes(){
	
	require('connector.php');
	
	$sqlcode = "SELECT * FROM inv_item_types";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$itemtypes = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($itemtypes,$row);
		}
	
		return $itemtypes;
	}
	else{
		return null;
	}
	
	
}









?>