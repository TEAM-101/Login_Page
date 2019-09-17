<?php
 $new_user = json_decode($_POST["new_user"], true);

 $user_name = $new_user["user_name"];
 $user = $new_user["user"];
 $role = $new_user["role"];
 $password = $new_user["password"];
?>