<?php
Class User{

	public static $minPassLength = 5;

	public static function validatePassword($password){
		if(strlen($password) >= Self::$minPassLength){
			return true;
		}else{
			return false;
		}
	}
}

$password = 'password';

if(User::validatePassword($password)){
	echo "Password is valid";
}else{
	echo "Password is NOT valid";
}

echo "<br />";
echo User::$minPassLength;

?>