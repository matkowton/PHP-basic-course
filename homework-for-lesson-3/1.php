<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<?php
		/*
			* 1.
			* С помощью цикла while вывести все числа в промежутке от 0 до 100,
			* которые делятся на 3 без остатка.
		*/
		
		$x = 0;
		while ($x <= 100) {
			if ($x % 3 == 0) {
				echo $x.'<br>';
			}
			$x++;
		}
	?>
</body>
</html>

