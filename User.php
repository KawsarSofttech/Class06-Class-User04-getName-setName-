<?php

class User{
	public $name;

	public function __construct()
	{
		echo "This is from constructor<br>";
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		echo $this->name;
	}
	public function greet()
	{
		echo "Welcome to OOP";
	}

}

$admin = new User();
$admin->setName("Mafij Bhai");
$admin->getName();


?>