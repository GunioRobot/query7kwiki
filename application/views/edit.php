<html>
	<head>
		<title><?php echo $page; ?> - Edit</title>
	</head>
	
	<body>
		
		<h1><?php echo $page; ?> - Edit</h1>
		<p>
			<form method="POST" action="/query7kwiki/index.php/wiki/<?php echo $page; ?>/save/"">
				
				<textarea rows="10" cols="60" name="content"><?php echo $content; ?></textarea>
				<br />
				<input type="submit" value="Edit Page" name="submit">
			</form>
		</p>
	</body>
</html>