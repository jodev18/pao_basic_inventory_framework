<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Equipment List</title>
<style type="text/css">
.td-head {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size: 18px;
	font-style: normal;
	font-weight: bold;
	background-color: #12D8F8;
	text-align: center;
}
.eq_item_design {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size: 16px;
	font-weight: bold;
}
</style>
</head>

<body>
<h1>Equipment List</h1>
<p>Kindly set your filter based on the parameters set below.</p>
<form id="form1" name="form1" action="#" method="post">
  <p>&nbsp;</p>
  <table width="100%" border="0" cellspacing="10" cellpadding="10">
    <tbody>
      <tr>
        <td><label for="select"><strong>Display by:</strong></label>
          <select name="eq_search_by" id="select">
			  <option value=1 selected> All </option>
			  <option value=2> Type </option>
			  <option value=3> Accountable Person </option>
        </select></td>
      </tr>
      <tr>
        <td><label for="select2"><strong>Item Type:</strong></label>
          <select name="filter_type" id="select2">
			  <option value=-1 selected> All </option>
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
        </select></td>
      </tr>
      <tr>
        <td><label for="select3"><strong>Accountable person:</strong></label>
          <select name="filter_person" id="select3">
            <option value=-1 selected> All </option>
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
        </select></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
</form>
<h2> Equipment list</h2>
<table width="100%" border="1" cellspacing="10" cellpadding="10">
  <tbody>
    <tr>
      <td width="27%" class="td-head"><strong>Equipment Name</strong></td>
      <td width="15%" class="td-head"><strong>Accountable Person</strong></td>
      <td width="28%" class="td-head"><strong>Price</strong></td>
      <td width="6%" class="td-head"><strong>Quantity</strong></td>
      <td width="6%" class="td-head"><strong>Model Number</strong></td>
      <td width="6%" class="td-head"><strong>Serial number</strong></td>
      <td width="6%" class="td-head"><strong>Date Purchased</strong></td>
      <td width="6%" class="td-head"><strong>Equipment Type</strong></td>
    </tr>
	  
	  <?php
	  	
	  	$searchby = $_POST['eq_search_by'];
	    $filter_person = $_POST['filter_person'];
	  	$filter_type = $_POST['filter_type'];
	  	
	  	if(isset($searchby) && isset($filter_person) && isset($filter_type)){
			if(!empty($searchby) && !empty($filter_person) && !empty($filter_type)){
//				var_dump($searchby);
//				var_dump($filter_person);
//				var_dump($filter_type);
				require('dbconn/get_equipments.php');
				
				switch($searchby){
					case 1:
						$eq_data = retrieveAllEquipments();
						
						if($eq_data != null){
							
							for($x=0;$x<count($eq_data);$x++){
								echo "<tr>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_name'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['acc_name'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_price'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_qty'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_model_no'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_serial'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['equip_date_purchased'] . "</td>\n";
								echo "<td class='eq_item_design'>" . $eq_data[$x]['type_name'] . "</td>\n";
								echo "</tr>\n";
							}
						}
						else{
							echo "<tr><td colspan=8><center> No Items Yet. </center></td></tr>";
						}
						break;
					default:
				}
			}
		}
	  
	  
	  
	  ?>
  </tbody>
</table>


</body>
</html>