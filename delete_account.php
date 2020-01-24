<?php
	require_once("api.php");
	$delete = $setup->delete_account($_SESSION['email'],$_SESSION['password']);

	if($delete=="success")
	{
		header("location:index.php");
		session_destroy();
	}
	else
	{
		print("It didn`t work");
	}
?>