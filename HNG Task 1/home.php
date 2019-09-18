<?php
session_start();
if (isset($_SESSION['username'])) {
//var_dump($_SESSION['admin']);
$user = $_SESSION['username'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Successful Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<style type="text/css">
		@font-face{
		font-family: myFirstFont;
		src:url(Poppins-Regular.otf);
	}


	body{
		background-color: #3A58A4;
		font-family: myFirstFont;
	}
	#signup_container{
		width: 1200px;
		height: 600px;
		margin:  50px auto;

		/*margin top: 50px;*/
		background-color: white;
		border-radius: 20px;
	}

	.success_image{
		margin-left: 300px;
		position: absolute;
	}

	.icon{
		margin-top: 260px;
		margin-left: 450px;
		position: relative;
	}

	.close{
		cursor: pointer;
		position: absolute;
		margin-left: 430px;
		margin-top: 15px;
		border:none;
		background-color: white;
		font-size: 15px;
		font-family: myFirstFont;
		color:#3A58A4; 
	}

	.success_text{
		font-size: 20px;
		color: #3A58A4; 
		margin-left: 490px;
		margin-top: 5px;

	}
	</style>
</head>
<body>
	<div id="signup_container">
		<img src="img/fogg-success-2.png" class="success_image">
		<img src="img/icon1.png" class="icon">
		<button class="close" onclick="document.getElementById('signup_container').style.display='none'" ><a href="index.php">Log off</a></button>
		<p class="success_text">Successful Login!</p>
	</div>

</body>
</html>

<?php  

} 
  else {
    header ("Location: index.php");
    exit();
    }


?>