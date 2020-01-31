<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Equipment Management</title>
</head>

<body>
	<h1>Equipment</h1>
	<form action="dbconn/add_equipment.php" method="post">
		<table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tbody>
    <tr>
      <td><label for="textfield">Equipment name:</label>
        <input type="text" name="eq_name" id="textfield"></td>
    </tr>
    <tr>
      <td><label for="select">Item Type:</label>
        <select name="eq_typeid" id="select">
			<?php
				require('dbconn/get_items.php');
			  
			  $itemtypes = retrieveItemTypes();
			  
			  if($itemtypes != null){
				  for($x=0;$x<count($itemtypes);$x++){
						echo "<option value=" . $itemtypes[$x]['type_id'] . ">" . $itemtypes[$x]['type_name'] . "</option>";
					}
			  }
			  else{
				  echo "<option value=-1> No item type in the database yet. </option>";
			  }
			?>
      	</select>
	  </tr>
    <tr>
      <td><label for="textfield">Accountable person:</label>
        <select name="eq_acctid" enabled>
		<?php
			
			require('dbconn/get_accountables.php');
			
			$accpeople = retrieveAccountablePersons();
			
			if($accpeople != null){
				for($x=0;$x<count($accpeople);$x++){
					echo "<option value=" . $accpeople[$x]['acc_id'] . ">" . $accpeople[$x]['acc_name'] . "</option>";
				}
			}
			else{
				echo "<option value=-1> No accountable person in the database yet. </option>";
			}
			
		?>
		</select>
    </tr>
    <tr>
      <td><label for="textarea2">Equipment price:</label>
        <input type="number" name="eq_price" placeholder="1.0" step="0.0001" required>
        </textarea></td>
    </tr>
    <tr>
      <td><label for="number">Quantity:</label>
        <input type="number" name="eq_qty" id="number"></td>
    </tr>
    <tr>
      <td><label for="textfield2">Model number:</label>
        <input type="text" name="eq_modelnum" id="textfield2"></td>
    </tr>
    <tr>
      <td><label for="textfield3">Serial number:</label>
        <input type="text" name="eq_serialnum" id="textfield3"></td>
    </tr>
    <tr>
      <td><label for="date">Date purchased:</label>
        <input type="date" name="eq_date_p" id="date"></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>