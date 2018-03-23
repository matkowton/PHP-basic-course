<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>

</body>
</html>
<?php
	/*
	 * 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и
	 * возвращает видоизмененную строчку.
	*/
	$str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Ad aperiam doloremque facere laborum maxime modi nisi optio
					quidem quos ut?';
	echo path_combine($str);
	
	function path_combine($str) {
		/*return str_replace(' ', '_', $str);*/
		$str = preg_split('//u', $str, NULL, PREG_SPLIT_NO_EMPTY);
		foreach ($str as $key => &$value) {
			if ($value == ' ') {
				$value = '_';
			}
		}
		return implode('', $str);
	}
?>