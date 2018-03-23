<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
</head>
<body>
	<?php
		/*
		 * 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,
		 * а в качестве значений – массивы с названиями городов из соответствующей области.
		 * Вывести в цикле значения массива, чтобы результат был таким:
		*/
		
		$get_regions = file_get_contents(
			'http://geoapi.spacenear.ru/api.php?method=getRegions&countryId=1'
		);
		$regions = json_decode($get_regions, true);
		foreach ($regions as $key => $value) {
			echo $value['name'].'<br>';
			$get_cities = file_get_contents(
				'http://geoapi.spacenear.ru/api.php?method=getCities&countryId=1&regionId='.
				$value['id_region']
			);
			$cities = json_decode($get_cities, true);
			echo '<ul>';
			$is_any_pattern = false;
			foreach ($cities as $s_key => $s_value) {
				$chars = preg_split('//u', $s_value['name'], NULL, PREG_SPLIT_NO_EMPTY);
				if ($chars[0] == 'К') {
					$is_any_pattern = true;
					echo '<li>';
					echo $s_value['name'];
					echo '</li>';
				}
			};
			if (!$is_any_pattern) {
				echo '<li>';
				echo 'В этом регионе нет ни одного города на К';
				echo '</li>';
			}
			echo '</ul>';
		}
	?>
</body>
</html>
