<html>
	<head>
		<title><?php echo $page; ?></title>
	</head>
	
	<body>
		
		<h1><?php echo $page; ?></h1>
		<p>
			<?php echo $content; ?>
		</p>
		<hr>
		<p>
			
			<a href="<?php echo Route::url('wiki-edit', array('page' => $page)); ?>">Edit</a>
		</p>
	</body>
</html>