<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdbuser', 'pw');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$error = "Unable to connect to database" . $e->getMessage();
	include 'error.html.php';
	exit();
}

try
{
	$query = 'SELECT joketext FROM joke';
	$result = $pdo->query($query);
}
catch (PDOException $e)
{
	$error = 'Error fetching jokes' . $e->getMessage();
	include 'error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$jokes[] = $row['joketext'];
}

include 'jokes.html.php';