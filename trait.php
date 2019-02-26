<?php 
# PHP为了多继承，新特性为trait
trait cookNew{
	public $name = 'dog';
	public function bark(){
		echo 'htis is bark';
	}
}
class realNew{
	public function cook(){
		echo 'i dont know';
	}
}
class fakeNew extends realNew{
	use cookNew;
	public function drive(){
		echo 'ue all';
	}
}
$fake = new fakeNew();
$fake->drive();
$fake->cook();
$fake->bark();
?>