<?php
	require_once("api.php");
	require_once("word_translate.php");
	//error_reporting(0);
	
	/*if (($_SESSION['timeout'] + 10) < time()) 
	{
		header("Location:index.php");
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<title>humhub</title>
	<link href="frontend/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" >
	<link href="frontend/css/styles2.css" type="text/css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="frontend/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>
	<!--div class="container"-->
		<img src="frontend/img/humhub-logo.png" class="mainpage_logo">
		<?php
			print(
				"<img src=frontend/img/profile_img.jpg class=user-img><p id=userName>"
				.$_SESSION['name']." ".$_SESSION['lastName'].
				"</p>");
		?>
		<button id="btnLogout" class="btn btn-lg btn-primary btn-block btn-signout" type="submit">Sign out</button>

		<div class="container" id="sign_in_form">
			<div class="sign_in_container" id="login"></div>
			<p class="trans_txt">Translate</p>
			
			<div class="row">

				<div class="row">
					<div class="col-xs-4 co-sm-4">
						<select class="language_from_combo">
							<option>
								English
							</option>
							<option>
								Sotho
							</option>
						</select>
					</div>
				</div>
				<div class="row">	
					<div class="col-xs-12 co-sm-12">
						<textarea class="trans_word" rows="1" required="required" id="user_word" name="word"></textarea>
					</div>
				</div>
				<!--div class="row"-->
			</div>
			<div class="row">

				<div class="row">
						<div class="col-xs-4 co-sm-4">
							<select class="language_to_combo">
								<option>
									Sotho
								</option>
								<option>
									English
								</option>
							</select>
						</div>
				</div>
			
				<div class="row">
						<div class="col-xs-12 co-sm-12">
							<div class="trans_word_container" >
								<?php
									print("
										<p class=pedi_word id=translated_word>&nbsp;$english_word</p>
										");
								?>
							</div>
						
						</div>
				</div>
			</div>
			
			

	<script type="text/javascript" src="frontend/js/translator_js.js"></script>
	
</body>
</html>