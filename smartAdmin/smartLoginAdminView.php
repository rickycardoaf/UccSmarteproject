<?php

// $dbhost  = "localhost";
// $dbuser  = "root";
// $dbpass  = "root";
// $dbname  = "_managerDB";

// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
// {

//     die("Failed to connect!");
// }else{
//     echo "connected";
// }

// // ini_set("display_errors", "1");
// error_reporting(E_ALL);
// ini_set('display_errors', TRUE);
// // include_once('dataClass/getUser.php');
// // $loginUser = new GetUser();
// // $loginUser->collectUser();




// if (isset($_SESSION['yourMessage'])) {
//     $yourMessage = $_SESSION['yourMessage'];
//     echo '
// <div class="alert alert-danger" role="alert">
//   ' . $yourMessage . '
// </div>
// ';
// }
echo '<div class="frame">
<div class="modal">
  <img src="https://100dayscss.com/codepen/alert.png" width="44" height="38" />
      <span class="title">Oh snap!</span>
      <p>An error has occured while creating an error report.</p>
      <div class="button">Dismiss</div>
</div>
</div>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Static/Css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <title>Smart-E-Login</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300);

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
  box-shadow: 1px 2px 10px 0px rgba(0,0,0,0.3);
	overflow: hidden;
  background: #3F3F3F;
  color: #415868;
	font-family: 'Open Sans', Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.modal {
  position: absolute;
	width: 280px;
	height: 210px;
  top: 95px;
  left: 60px;
	background: #fff;
	border-radius: 3px;
	box-shadow: 4px 8px 12px 0 rgba(0,0,0,0.4);
	text-align: center;
	overflow: hidden;
	animation: show-modal .7s ease-in-out;
	
	&.hide {
		animation: hide-modal .6s ease-in-out both;
	}
	
	img {
		margin-top: 24px;
	}
	
	.title {
		display: block;
		font-size: 18px;
		line-height: 24px;
		font-weight: 400;
		margin: 14px 0 5px 0;
	}
	
	p {
		font-size: 14px;
		font-weight: 300;
		line-height: 19px;
		margin: 0;
		padding: 0 30px;
	}
	
	.button {
		position: absolute;
		height: 40px;
		bottom: 0;
		left: 0;
		right: 0;
		background: #F65656;
		color: #fff;
		line-height: 40px;
		font-size: 14px;
		font-weight: 400;
		cursor: pointer;
		transition: background .3s ease-in-out;
		
		&:hover {
			background: #EC3434;
		}
		
	}
	
}

@keyframes show-modal {
	0% {
		transform: scale(0);
	}
	60% {
		transform: scale(1.1);
	}
	80% {
		transform: scale(.95);
	}
	100% {
		transform: scale(1);
	}
}

@keyframes hide-modal {
	0% {
		transform: scale(1);
	}
	20% {
		transform: scale(1.1);
	}
	100% {
		transform: scale(0);
	}
}
    </style>
   <script>
    $('.button').bind('click', function() {
	$('.modal').addClass('hide');
});
   </script>
</head>

<body>
    <div id="logoImg" style="width:30%;">
        <a href="../index.php"><img src="../static/img/logo.jpg" alt=""></a> <h1 style="display: inline;">Admin</h1>
    </div>
    <div class="mainDiv card2">
        <h3 class="title text-center mt-4">Smart-E</h3>
        <form method="POST" autocomplete="off" action="index.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="userpassword" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-block bg-primary text-uppercase text-white" name="logingbtn">Submit</button>
            <div class="text-center mb-2">
            <a href="smartForgotP.php">Forgot Password</a>
                OR 
                <a href="smartSignupView.php" class="register-link"> Click here to create your account</a>
            </div>
        </form>
    </div>
</body> 
</html>
