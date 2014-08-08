<!DOCTYPE html>
<html>
<head>
	<title>List of jokes</title>
	<meta charset="utf-8" />
</head>
<body>
	<p>Jokes in database:</p>
	<?php foreach ($jokes as $joke): ?>
		<blockquote>
			<p>
				<?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8');?>
			</p>
		</blockquote>
	<?php endforeach; ?>
</body>
</html>
