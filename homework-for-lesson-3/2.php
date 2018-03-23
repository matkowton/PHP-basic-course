<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<?php
		/*
		 * 2.
		 * С помощью цикла do…while написать функцию для вывода чисел от 0 до 10,
		 * чтобы результат выглядел так:
		*/
		
		$x = 0;
		do {
			if ($x % 2 == 0) {
				if ($x == 0) {
					echo $x.' - это ноль <br>';
				} else {
					echo $x.' - это четное число <br>';
				}
			} else {
				echo $x.' - это не четное число <br>';
			}
			$x++;
		} while ($x <= 10);
	?>
</body>
</html>
