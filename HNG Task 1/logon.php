<?php
  function clean_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

  function generateHash($password) {
	if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
		$salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
		return crypt($password, $salt);
	}
  }

  function verify($password, $hashedPassword) {
	return crypt($password, $hashedPassword) == $hashedPassword;
  }

  $username = clean_input($_POST["username"]);
  $password = clean_input($_POST["password"]);
  //$role = clean_input($_POST["role"]);

  $users_json = file_get_contents("users.json");
  $users = json_decode($users_json, true);
  $users_length = count($users);
  //$username = "tego";
  //$password = "jusleisnie";
  for($i =0; $i < $users_length; $i++) {
  	if (array_search($password, $users[$i])) {
  		$a = $users[$i]["username"];
  		echo $a;
  		if ($a == $username) {
  			session_id(3);
	        session_start();
	        $_SESSION["username"] = $username;
	        header("Location: home.php");
  		} else {
  			header("Location: index.php?error=1");
  			break;
  		}
  	}
  }
?>