<?php
header('Content-Type: text/html, charset=UTF-8');
include 'variables.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $index->get_title(); ?></title>
</head>
<body>
	<h1><?php echo $index->get_h1(); ?></h1>
	<h3><?php echo $index->get_year(); ?></h3>
	<p><?php echo $text; ?></p>
	<p><?php echo $user->text_converter($text); ?></p>
	<p><?php echo $user->text_extraction($text, '/On my watch is now \d+.\d+.\d+.\d+.\d+/i'); ?></p>
</body>
</html>
