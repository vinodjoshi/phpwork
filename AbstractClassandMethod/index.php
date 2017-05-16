<?php
abstract class Animal{
	public $name;
	public $color;

	public function describe(){
		return $this->name . 'is ' . $this->color;
	}

	abstract public function makeSound();
}

Class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return "Quack";
	}
}

Class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}

	public function makeSound(){
		return "Bark";
	}
}

$animal = new Duck;
$animal->name = 'Larry';
$animal->color = 'Brown';

echo $animal->describe();

echo "<hr>";
$animal = new Dog;
echo $animal->makeSound();