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


 $user_name = clean_input($_POST["user_name"]);
 $name = clean_input($_POST["name"]);
 $email = clean_input($_POST["email"]);
 $password = clean_input($_POST["password"]);
 $verify_password = clean_input($_POST["verify_password"]);

 if ($password == $verify_password) {
 	  if (file_exists("users.json")) {
 		  $users_json = file_get_contents("users.json");
      $users = json_decode($users_json, true);
 	  } else {
 		  $users = [];
 	  }
 	
    $users_length = count($users);
    $users[$users_length]["username"] = $user_name;
    $users[$users_length]["password"] = $password;
    $users[$users_length]["email"] = $email;
    $users[$users_length]["name"] = $name;
    $users_json = json_encode($users);
    $users_file = fopen("users.json", "w+");
    fwrite($users_file, $users_json);
    header("Location: index.php");
 } else {
    //echo $password . "  " . $verify_password;
 	header("Location: index.php?error=3");
 }
?>
