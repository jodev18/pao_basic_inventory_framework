<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Departments</title>
</head>

<body>
	<h1>Departments</h1>
	<form action="dbconn/add_department.php" method="post">
		<table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tbody>
    <tr>
      <td><label for="textfield">Department Name:</label>
        <input type="text" name="dept_name" id="textfield"></td>
    </tr>
    <tr>
      <td><label for="textarea">Department Description:</label>
        <textarea name="dept_desc" id="textarea"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>