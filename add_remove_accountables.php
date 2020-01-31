<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accountables</title>
</head>

<body>
<h1>Accountable Persons</h1>
<form action="dbconn/add_accountable.php" method="post">
  <table width="100%" border="0" cellspacing="10" cellpadding="10">
    <tbody>
      <tr>
        <td><label for="textfield">Person in-charge:</label>
          <input type="text" name="acct_name" id="textfield"></td>
      </tr>
      <tr>
        <td><label for="textarea">Department:</label>
          <select name="dept_id">
			<?php
			  
			  require('dbconn/get_departments.php');
			  
			  $departments = retrieveDepartmentInfo();
			  
			  if($departments != null){
				  for($x=0;$x<count($departments);$x++){
						echo "<option value=" . $departments[$x]['dept_id'] . ">" . $departments[$x]['dept_name'] . "</option>";
					}
			  }
			  else{
				  echo "<option value=-1> No department in the database yet. </option>";
			  }
			  
			  
			?>
		  </select>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>