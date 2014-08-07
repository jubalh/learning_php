<!DOCTYPE html>
<html>
<head>
    <title>Learning PHP</title>
    <meta charset="utf-8" />
</head>
<body>
<?php
if (!isset($_POST['usrname']))
{ ?>
	<form action="first.php" method="post" accept-charset="utf-8">
		User:</br>
		<input type="text" name="usrname" id="usrname"></br>
		Password:</br>
		<input type="text" name="password" id="password">
		<p><input type="submit" value="Continue →"></p>
	</form>
<?php
} else {
	$host = "localhost";
	$mysqlusr = "michael";
	$mysqlpw = "pw";
	$mysqldb = "testdb";
	$mysqltable = "todolist";

	$user = $_POST['usrname'];
	$pw = $_POST['password'];
	$con = mysql_connect( $host, $mysqlusr, $mysqlpw ) or die("couldnt connect to db");
	mysql_select_db($mysqldb) or die ("couldnt select db");

	$query = sprintf("SELECT * FROM %s", $mysqltable);
	$result = mysql_query($query);
	if ($result) {
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		echo $row[text];
		/*
		echo "<ul>";
		foreach($row as $item => $txt) {
			echo "<li>" . $txt . "</li>";
		}
		echo "</ul>";
		 */
		print_r($row);
	}

	echo "Hello " . $user;


}?>

</body>
</html>
