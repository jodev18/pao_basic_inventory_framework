<?php

	if(isset($_POST)){
		
		$dept_name = $_POST['dept_name'];
		$dept_desc = $_POST['dept_desc'];
		
		if(isset($dept_name) && isset($dept_desc)){
			if(!empty($dept_name) && !empty($dept_desc)){
				require('connector.php');

				$sql = "INSERT INTO inv_departments (dept_name,dept_desc)
				VALUES (\"$dept_name\",\"$dept_desc\")";

				if ($conn->query($sql) === TRUE) {
					echo "<script> alert('Department saved.'); </script>";
					echo "<script> window.history.back(); </script>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
	}
	
?>