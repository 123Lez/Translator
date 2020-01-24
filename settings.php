<?php
	require_once("api.php");

	if (($_SESSION['timeout'] + 10 * 60) < time()) 
	{
		header("Location:index.php");
	}
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

				<form name="myform3" method="POST" onsubmit="return validation()">
					<img src="frontend/img/humhub-logo.png" class="site-logo">

					<input type="text" placeholder="Name" class="form-control" value="<?php echo $_SESSION["name"];?>" require id="email_signIn" name="name_update" autofocus>
					<input type="text" placeholder="lastname" value="<?php echo $_SESSION["lastName"];?>" class="form-control" require id="email_signIn" name="lastname_update">

					<fieldset disabled>
						<input type="text" placeholder="Email" value="<?php echo $_SESSION["email"];?>" class="form-control" require id="email_signIn" name="email_update">
					</fieldset>

					<input type="Password" placeholder="Password" value="<?php echo $_SESSION["password"];?>" class="form-control" require id="email_signIn" name="password_update">
					<p id="pass"></p>
					<button id="btnSignUp" name="update" class="btn btn-lg btn-primary btn-block btn-create_account" type="submit">Update</button>
					<a href="translate.php" class="btn btn-lg btn-primary btn-block btn-signup">Cancel</a>

					
					
				</form>
			</center>
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>
	

</body>
</html>