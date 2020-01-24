<?php
	require_once("api.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>humhub</title>

	<link href="frontend/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"">
	<link href="frontend/css/styles.css" type="text/css" rel="stylesheet" media="screen and (max-width: 481px)">
</head>
<body>
	<div class="container" id="sign_in_form">
		<div class="sign_in_container" id="login">
			<center>

				<form name="myform" method="POST" class="form-login" onsubmit="login()">
					<img src="frontend/img/humhub-logo.png" class="site-logo">
					<input type="text" placeholder="Email" class="form-control" require id="email_signIn" name="email_signIn" autofocus>

					<input type="Password" placeholder="Password" class="form-control" require id="password_signIn" name="password_signIn">
					<button id="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
					<button id="btnRegister" class="btn btn-lg btn-primary btn-block btn-signup" type="submit">Register</button>

					<div id="wait_msg"></div>
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>

</body>
</html>