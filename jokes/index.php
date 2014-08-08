<?php

if (isset($_GET['addjoke']))
{
	include 'form.html.php';
	exit();
}

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

if (isset($_POST['joketext']))
{
	echo "hey";
	try
	{
		$query = 'INSERT INTO joke SET joketext = :joketext, jokedate = CURDATE()';
		$s = $pdo->prepare($query);
		$s->bindValue(':joketext', $_POST['joketext']);
		$s->execute();
	}
	catch(PDOException $e)
	{
		$error = 'Error adding joke: ' . $e->getMessage();
		include 'error.html.php';
		exit();
	}

	header('Location: .');
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

foreach ($result as $row)
{
	$jokes[] = $row['joketext'];
}

include 'jokes.html.php';
