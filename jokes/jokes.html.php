<!DOCTYPE html>
<html>
<head>
	<title>List of jokes</title>
	<meta charset="utf-8" />
</head>
<body>
	<p>Jokes in database:</p>
	<?php foreach ($jokes as $joke): ?>
		<form action="?deletejoke" method="post">
			<blockquote>
				<p>
					<?php echo htmlspecialchars($joke['text'], ENT_QUOTES, 'UTF-8');?>
				<input type="hidden" name="id" value="<?php echo $joke['id']; ?>">
				<input type="submit" value="delete">
				</p>
			</blockquote>
		</form>
	<?php endforeach; ?>
	<p><a href="?addjoke">Add your own joke</a></p>
</body>
</html>
