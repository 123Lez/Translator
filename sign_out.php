<?php
	require_once("api.php");
	$logout = $setup->user_logout($_SESSION['email'],$_SESSION['password']);
	if($logout=="success")
	{
		session_destroy();
		$_SESSION['timeout']=0;
		header("location:index.php");
	}
	

?>