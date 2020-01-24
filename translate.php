<?php
	require_once("api.php");
	require_once("word_translate.php");
	error_reporting(0);
	
	if (($_SESSION['timeout'] + 10 ) < time()) 
	{
		header("Location:sign_out.php");
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
	<link href="frontend/css/mobile_style.css" type="text/css" rel="stylesheet" media="only screen and (max-width: 480px)">
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="frontend/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>

	<div class="header-holder">
		<img src="frontend/img/humhub-logo.png" class="mainpage_logo">
		<?php
			print(
				"<div class=dropdown>
					<img src=frontend/img/profile_img.jpg onclick=myFunction() class=user-img>
					<div id=myDropdown class=dropdown-content>
	    					<a href=settings.php>Settings</a>
	    					<a href=delete_account.php>Delete Account</a>
	 					</div>
					</div>
					<p id=userName>
					"
				.$_SESSION['name']."&nbsp".$_SESSION['lastName'].
				"</p>");
		?>
		<a href="sign_out.php" class="btn btn-lg btn-primary btn-block btn-signout" >Sign out</a>
	</div>
	<div class="container-flex" id="mainpage_form">
			<div class="main_container" id="mainpage"></div>
			<p class="trans_txt">Translate</p>

		<form method="GET">
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
					<div class="col-xs-2 co-sm-2">
						<button id="btnTranslate" class="btn btn-lg btn-primary btn-block btn-translate" type="submit">Translate</button>
					</div>
				</div>

				<div class="row">
					<div class="trans_word_container" >
					<?php
					print("
							<p class=pedi_word id=translated_word>&nbsp;$english_word</p>
						");
					?>
					
				</div>

				</div>
			</div>
				

				
			<div class="row">

				
				
			
				<!--p class="trans_of_word" id="transOf"></p>
				<p class="word_type_cl" id="word_type"></p>
				<p class="sepedi_word_example_cl" id="sepedi_word_example"></p>
				<p class="eng_word_example_cl" id="eng_word_example"></p-->
				<div class="col-xs-2 co-sm-2">
				<?php
					print("
						<p class=trans_of_word id=transOf>Translation of <strong>$word</strong></p>
						<p class=word_type_cl id=word_type>$word_type</p>
						<p class=sepedi_word_example_cl id=sepedi_word_example><strong>Eng</strong>-$setswana_example</p>
						<p class=eng_word_example_cl id=eng_word_example><strong>Sep</strong>-$english_example</p");
				?>
				</div>
			</div>
		</form>
			
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>
	
</body>
</html>