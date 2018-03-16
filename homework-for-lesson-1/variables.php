<?php
class Index {
  private $title = 'Lesson 1';
  private $h1 = 'Page title here!';
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
$index = new Index;
?>