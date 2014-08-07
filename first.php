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
	echo "Hello " . $_POST['usrname'];
}?>

</body>
</html>
