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
	 * 4.
	 * Написать функцию транслитерации строк
	*/
	
	include "translit.php";
	
	function translit($string, $array) {
		$string = preg_split('//u', $string, NULL, PREG_SPLIT_NO_EMPTY);
		foreach ($string as $key => &$value) {
			if (array_key_exists($value, $array)) {
				$value = $array[$value];
			}
		}
		return implode('', $string);
	}
	
	echo translit('Привет, я строка и сейчас меня транслитерируют', $translit);
?>