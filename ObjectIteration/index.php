<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

Class People{

	public $person1 = 'Mike';
	public $person2 = 'John';
	public $person3 = 'Jeff';

	protected $person4 = 'Vin';
	private $person5 = 'Jen';

	function iterateObject(){
		foreach ($this as $key => $value) {
			print "$key => $value\n";
		}
	}
}

$people = new People;
$people->iterateObject();