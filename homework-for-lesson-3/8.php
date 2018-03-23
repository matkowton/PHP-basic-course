<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<?php
		include "translit.php";
		
		$str = 'путь/к файлу/файл русскими буквами.html';
		function make_good_path(string $str, array $translit) {
			$str = preg_split('//u', $str, NULL, PREG_SPLIT_NO_EMPTY);
			foreach ($str as $key => &$value) {
				if (array_key_exists($value, $translit)) {
					$value = $translit[$value];
				}
			}
			$str = implode('', $str);
			return str_replace(' ', '_', $str);
		}
		
		echo make_good_path($str, $translit);
	?>
</body>
</html>
