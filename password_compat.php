<?php
// https://github.com/ircmaxell/password_compat
	require_once "vendor/autoload.php";

	$password = "qwer1234";
	$hash = password_hash($password, PASSWORD_BCRYPT);

	echo $hash;
	$password2 = "qwer1234";
	if (password_verify($password2, $hash)) {
		echo "valid";
	} else {
		echo "invalid";
	}


?>
