<?php

	if(isset($_POST)){
		
		$type_name = $_POST['inv_type'];
		$type_desc = $_POST['inv_desc'];
		
		if(isset($type_name) && isset($type_desc)){
			if(!empty($type_name) && !empty($type_desc)){
				require('connector.php');

				$sql = "INSERT INTO inv_item_types (type_name,type_description)
				VALUES ('$type_name','$type_desc')";

				if ($conn->query($sql) === TRUE) {
					echo "<script> alert('Item type saved.'); </script>";
					echo "<script> window.history.back(); </script>";
				} 
				else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
	}
	
?>