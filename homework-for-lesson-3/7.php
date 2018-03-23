<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<?php
		// с echo не получилось сделать и сделал так
		function print_it($str) {
			echo $str.'<br>';
		}
		for ($i = 0; $i < 10; print_it(++$i)) {}
		
		// потом нагуглил что надо писать print а не echo - тогда будет выводить.
		// В чем разница не понял?
		for ($i = 0; $i < 10; print $i++.'<br>') {}
	?>
</body>
</html>
