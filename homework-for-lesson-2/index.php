<?php
/*
 * 1.
 * Объявить две целочисленные переменные $a и $b
 * и задать им произвольные начальные значения. Затем написать скрипт,
 * который работает по следующему принципу:
 * если $a и $b положительные, вывести их разность;
 * если $а и $b отрицательные, вывести их произведение;
 * если $а и $b разных знаков, вывести их сумму;
 * Ноль можно считать положительным числом.
 */
function generate_number() {
	$character = rand(0, 1);
	if ($character) {
		return $character = -rand(0, 1000);
	} else {
		return $character = rand(0, 1000);
	}
}

function calculate($a, $b) {
	if ($a >= 0 && $b >= 0) {
		return max($a, $b) - min($a, $b);
	} elseif ($a < 0 && $b < 0) {
		return $a * $b;
	} elseif (($a > 0 && $b < 0) || ($a < 0 && $b > 0)) {
		return $a + $b;
	}
}

$a = generate_number();
$b = generate_number();
echo calculate($a, $b);

/*
 * 2.
 * Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
 * Обязательно использовать оператор return.
*/

function my_sum($a, $b) {
	return $a + $b;
}

function my_multiplication($a, $b) {
	return $a * $b;
}

function my_division($a, $b) {
	return $a / $b;
}

function my_subtraction($a, $b) {
	return $a - $b;
}

/*
 * 3.
 * Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 * где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
 * В зависимости от переданного значения операции выполнить одну из арифметических операций
 * (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/
function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case '/':
			return $arg1 / $arg2;
		case '*':
			return $arg1 * $arg2;
		case '+':
			return $arg1 + $arg2;
		case '-':
			return $arg1 - $arg2;
		default:
			return false;
	}
}

echo mathOperation(5, 10, '+');

/*
 * 4.
 * Посмотреть на встроенные функции PHP.
 * Используя имеющийся HTML-шаблон,
 * вывести текущий год в подвале при помощи встроенных функций PHP.
*/
// что бы не создавать отдельную страницу - выведу тут
echo date('Y');

/*
 * 5.*
 * С помощью рекурсии организовать функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/
function power($val, $pow) {
	if ($pow <= 1) {
		return $val;
	}
	return $val * power($val, $pow - 1);
}

echo power(5, 8);

/*
 * 7.*
 * Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными
 * склонениями, например: 22 часа 15 минут, 21 час 43 минуты
*/
// немного погуглил для решения этой задачи и адаптировал под свой вариант
function time_convert() {
	$hours = date('H');
	$minutes = date('i');
	$hours_title = [
		0 => ' час',
		1 => ' часа',
		2 => ' часов',
	];
	$minutes_title = [
		0 => ' минута',
		1 => ' минут',
		2 => ' минуты',
	];

	function choose_word($n, $options) {
		if($n >= 11 and $n <= 19) {
			return $options[2];
		}
		$n = $n % 10;
		if($n == 1) {
			return $options[0];
		}
		if($n >= 2 and $n <= 4) {
			return $options[1];
		}
		return $options[2];
	}

	return $hours.choose_word($hours, $hours_title).', '.
		$minutes.choose_word($hours, $minutes_title);
}

echo time_convert();

