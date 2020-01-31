<?php

//Function for retrieving the accountables.

function retrieveAllEquipments(){
	
	require('connector.php');
	
	$sqlcode = "select * from inv_equipments inner join inv_item_types on inv_equipments.equip_type_id=inv_item_types.type_id inner join inv_accountables on inv_equipments.equip_acc_id=inv_accountables.acc_id;";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$equipments = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($equipments,$row);
		}
	
		return $equipments;
	}
	else{
		return null;
	}
	
}

function retrieveAllEquipmentsByType($typeid){
	
	require('connector.php');
	
	$sqlcode = "select * from inv_equipments inner join inv_item_types on inv_equipments.equip_type_id=inv_item_types.type_id inner join inv_accountables on inv_equipments.equip_acc_id=inv_accountables.acc_id WHERE inv_item_types.type_id='$typeid'";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$equipments = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($equipments,$row);
		}
	
		return $equipments;
	}
	else{
		return null;
	}
	
}

function retrieveAllEquipmentsByAccId($acc_id){
	
	require('connector.php');
	
	$sqlcode = "select * from inv_equipments inner join inv_item_types on inv_equipments.equip_type_id=inv_item_types.type_id inner join inv_accountables on inv_equipments.equip_acc_id=inv_accountables.acc_id WHERE inv_item_types.type_id='$typeid'";
	
	$conn_res = $conn->query($sqlcode);
	
	if($conn_res->num_rows > 0){
		
		$equipments = array();
		while($row = $conn_res->fetch_assoc()){
			array_push($equipments,$row);
		}
	
		return $equipments;
	}
	else{
		return null;
	}
	
}







?>