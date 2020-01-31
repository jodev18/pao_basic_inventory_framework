<?php

	if(isset($_POST)){
		
		$equip_name = $_POST['eq_name'];
		$equip_acct_id = $_POST['eq_acctid'];
		$equip_price = $_POST['eq_price'];
		$equip_qty = $_POST['eq_qty'];
		$equip_modelno = $_POST['eq_modelnum'];
		$equip_serial = $_POST['eq_serialnum'];
		$equip_date_p = $_POST['eq_date_p'];
		$equip_typeid = $_POST['eq_typeid'];
		
		if(isset($equip_name) && isset($equip_acct_id) && isset($equip_price) && isset($equip_qty) && isset($equip_modelno) && isset($equip_serial) && isset($equip_date_p) && isset($equip_typeid)){
			
			if(!empty($equip_name) && !empty($equip_acct_id) && !empty($equip_price) && !empty($equip_qty) && !empty($equip_modelno) && !empty($equip_serial) && !empty($equip_date_p) && !empty($equip_typeid)){
				
				require('connector.php');
				
				$date=date("Y-m-d",strtotime($equip_date_p));
				

				$sql = "INSERT INTO inv_equipments (equip_name,equip_acc_id,equip_price,equip_qty,equip_model_no,equip_serial,equip_date_purchased,equip_type_id)
				VALUES ('$equip_name',$equip_acct_id,$equip_price,$equip_qty,'$equip_modelno','$equip_serial','$date',$equip_typeid)";

				if ($conn->query($sql) === TRUE) {
					echo "<script> alert('Equipment saved to database.'); </script>";
					echo "<script> window.history.back(); </script>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
	}
	
?>