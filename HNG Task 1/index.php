<?php
  $error="";
  if(isset($_GET["error"])){
    $error = $_GET["error"];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Log In Page</title>
</head>

<body>


    <main>
        <section class="login-form">
            <div class="bg">

            </div>
            <div class="box">
                <form action="logon.php" method="POST">
                    <h2>Welcome Back!</h2>
                    <h3>Sign In</h3>
                    <div>
                        <input type="text" required name="username">
                        <label for="">Username or Email</label>
                    </div>
                    <div>
                        <input type="password" required name="password">
                        <label for="">Password</label>
                        <button class="show-pswrd"> show </button>
                        <button class="forgot-pswrd"> Forgot Password? </button>

                    </div>
                    <input type="submit" value="Log In">
                </form>

                <div class="alternate">
                    <p>Or Sign in with</p>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <p class="need">Need an account? <a href="#">Sign up here</a></p>
            </div>
        </section>
    </main>
</body>

</html>
