<?php

	if(isset($_POST)){
		
		$acct_name = $_POST['acct_name'];
		$dept_id = $_POST['dept_id'];
		
		if(isset($acct_name) && isset($dept_id)){
			if(!empty($acct_name) && !empty($dept_id)){
				require('connector.php');

				$sql = "INSERT INTO inv_accountables (acc_name,dept_id)
				VALUES ('$acct_name',$dept_id)";

				if ($conn->query($sql) === TRUE) {
					echo "<script> alert('Accountable saved to database.'); </script>";
					echo "<script> window.history.back(); </script>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
	}
	
?>