<?php
	require_once("api.php");
/*
	if ($sessionTime < time()) 
	{
		header("Location:index.php");
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>humhub</title>

	<link href="frontend/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"">
	<link href="frontend/css/styles.css" type="text/css" rel="stylesheet" media="screen and (min-width: 481px)">
	<link href="frontend/css/styles.css" type="text/css" rel="stylesheet" media="only screen and (max-width: 480px)">
	<script type="text/javascript" src="frontend/js/validation.js"></script>
</head>
<body>
	<div class="container" id="sign_in_form">
		<div class="sign_up_container" id="register">
			<center>

				<form name="myform" method="POST" onsubmit="return validation()">
					<img src="frontend/img/humhub-logo.png" class="site-logo">
					<input type="text" placeholder="Name" class="form-control" require id="email_signIn" name="name_signUp" autofocus><p id="nameId"></p>
					<input type="text" placeholder="lastname" class="form-control" require id="email_signIn" name="lastname_signup">
					<input type="text" placeholder="Email" class="form-control" require id="email_signIn" name="email_signup">

					<input type="Password" placeholder="Password" class="form-control" require id="email_signIn" name="password_signup">
					<input type="Password" placeholder="Retype-Password" class="form-control" require id="email_signIn" name="repassword_signup">
					<p id="pass"></p>
					<button id="btnSignUp" class="btn btn-lg btn-primary btn-block btn-create_account" type="submit">Sign up</button>

					
					
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>
	

</body>
</html>