<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Item Types</title>
</head>

<body>
	<h1>Item Types</h1>
	<form action="dbconn/add_item_type.php" method="post">
		<table width="100%" border="0" cellspacing="10" cellpadding="10">
  <tbody>
    <tr>
      <td><label for="textfield">Item Type:</label>
        <input type="text" name="inv_type" id="textfield"></td>
    </tr>
    <tr>
      <td><label for="textarea">Item Description:</label>
        <textarea name="inv_desc" id="textarea"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Submit"></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>