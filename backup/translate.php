<?php
	require_once("api.php");
	require_once("word_translate.php");
	//error_reporting(0);
	
	/*if (($_SESSION['timeout'] +  10) < time()) 
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
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="frontend/bootstrap/js/bootstrap.min.js"></script>


</head>

<body>

	<div class="header-holder">
		<img src="frontend/img/humhub-logo.png" class="mainpage_logo">
		<?php
			print(
				"<img src=frontend/img/profile_img.jpg class=user-img><p id=userName>"
				.$_SESSION['name']." ".$_SESSION['lastName'].
				"</p>");
		?>
		<button id="btnLogout" class="btn btn-lg btn-primary btn-block btn-signout" type="submit">Sign out</button>
	</div>
	<div class="form_container">
		<form method="GET">
		
			<div class="cont">
				<p class="trans_txt">Translate</p>

				<select class="language_from_combo">
					<option>
						English
					</option>
					<option>
						Sotho
					</option>
				</select>
				
				<select class="language_to_combo">
					<option>
						Sotho
					</option>
					<option>
						English
					</option>
				</select>

				<textarea class="trans_word" rows="1" required="required" id="user_word" name="word"></textarea>

				<div class="trans_word_container" >
					<?php
					print("
							<p class=pedi_word id=translated_word>&nbsp;$english_word</p>
						");
					?>
					
				</div>

				<button id="btnTranslate" class="btn btn-lg btn-primary btn-block btn-translate" type="submit">Translate</button>
			
			<!--p class="trans_of_word" id="transOf"></p>
			<p class="word_type_cl" id="word_type"></p>
			<p class="sepedi_word_example_cl" id="sepedi_word_example"></p>
			<p class="eng_word_example_cl" id="eng_word_example"></p-->
			<?php
				print("
					<p class=trans_of_word id=transOf>Translation of <strong>$word</strong></p>
					<p class=word_type_cl id=word_type>$word_type</p>
					<p class=sepedi_word_example_cl id=sepedi_word_example>$setswana_example</p>
					<p class=eng_word_example_cl id=eng_word_example>$english_example</p");
			?>
		</form>
		</div>
	</div>
	<script type="text/javascript" src="frontend/js/translator_js.js"></script>
	
</body>
</html>