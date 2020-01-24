<?php
	require_once("api.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>humhub</title>

	<link href="frontend/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="frontend/css/styles.css" type="text/css" rel="stylesheet" media="screen and (min-width: 481px)">
	<link href="frontend/css/mobile_style.css" type="text/css" rel="stylesheet" media="only screen and (max-width: 480px)">
	<script type="text/javascript">
		function register_redirect()
		{
			location("sign_up.php");
		}
	</script>
	<script type="text/javascript" src="frontend/js/validation.js"></script>
</head>
<body>
	<div class="container" id="sign_in_form">
		<div class="sign_in_container" id="login">
			<center>

				<form name="myform2" method="POST" onsubmit="return validate_sign_in()">
					<img src="frontend/img/humhub-logo.png" class="site-logo">
					<input type="text" placeholder="Email" class="form-control" require id="email_signIn" name="email_signIn" autofocus>

					<input type="Password" placeholder="Password" class="form-control" require id="password_signIn" name="password_signIn">
					<p id="msg"></p>
					<button id="btnLogin" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
					</form>
					<a href="sign_up.php" class="btn btn-lg btn-primary btn-block btn-signup">Register</a>
					
					<?php
						if($data=="error")
						{
							print("<div id=msg class='alert alert-danger'>Such user does not exist</div>");
						}
						
					?>
					
				
			</center>
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>

</body>
</html>