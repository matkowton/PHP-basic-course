<?php
	$res = scandir('images');
	foreach ($res as $name) {
		if ($name == '.' || $name == '..') {
			continue;
		} ?>
		<img <?php echo ' src="images/'.$name.'"'; ?>>
	<?php } ?>
