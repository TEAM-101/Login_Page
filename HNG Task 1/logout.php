<?php
 session_id(3);
 session_start();

 unset($_SESSION['admin']);
 session_unset();
 session_destroy();
 
 header("Location: signin.php");
?>