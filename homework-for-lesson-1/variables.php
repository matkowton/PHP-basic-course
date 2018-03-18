<?php
define('SECONDS_IN_YEAR', 31536000);

class Index {
	private $title = 'Lesson 1';
	private $h1 = 'User info!';
	public function get_title() {
		return $this->title;
	}
	public function get_h1() {
		return $this->h1;
	}
	public function get_year() {
		return date('Y');
	}
}

class User {
	private $bday = '01-08-1990';
	private $name = 'Maxim Goldy';
	public function get_date() {
		return date('d-m-Y H:i');
	}
	public function get_age() {
		$age = strtotime($this->bday);
		return floor(time() / SECONDS_IN_YEAR - $age / SECONDS_IN_YEAR);
	}
	public function get_name() {
		return $this->name;
	}
	public function text_converter($text) {
		return preg_replace('/\s/', '_', $text);
	}
	public function text_extraction($text, $pattern) {
		preg_match($pattern, $text, $array);
		return $array[0];
	}
}

$index = new Index;
$user = new User;
$name = $user->get_name();
$age = $user->get_age();
$current_time = $user->get_date();
$text = "My name is $name. In a year I will be ".($age + 1).
	" y.o. and a year later ".($age + 2)." y.o. On my watch is now $current_time";
?>