<?php

//Function for retrieving the accountables.

function retrieveAccountablePersons(){
	
	require('connector.php');
	
	$sqlcode = "SELECT * FROM inv_accountables";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$accountable_person = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($accountable_person,$row);
		}
	
		return $accountable_person;
	}
	else{
		return null;
	}
}

function getAccountableNameById($accid){
	require('connector.php');
	
	$sqlcode = "SELECT acc_name FROM inv_accountables where acc_id=" . $acc_id;
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$accountable_person = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($accountable_person,$row);
		}
	
		return $accountable_person;
	}
	else{
		return null;
	}
}









?>