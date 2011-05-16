<html>
	<head>
		<title><?php echo $page; ?> - Create</title>
	</head>
	
	<body>
		
		<h1><?php echo $page; ?></h1>
		<p>This page does not exist. <a href="<?php echo Route::url('wiki-edit', array('page' => $page)); ?>">Create?</a></p>
		
	</body>
</html>