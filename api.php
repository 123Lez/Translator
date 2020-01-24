<?php
	session_start();
	require_once('backend/trans_setup.php');
	require_once('backend/config.php');

	$setup = new translator($host,$db_name,$password,$dir_name);
	$data="";

	if(isset($_POST) && $_SERVER['REQUEST_METHOD']=="POST")
	{
		
		//user log in
		if(!empty($_POST['email_signIn']) && !empty($_POST['password_signIn']))
		{
			$data=$setup->userLogin($_POST['email_signIn'],$_POST['password_signIn']);
			if($data!="error")
			{

				$_SESSION['id']=$data['id'];
				$_SESSION['name']=$data['name'];
				$_SESSION['lastName']=$data['lastname'];
				$_SESSION['email']=$data['email'];
				$_SESSION['password']=$data['password'];
				$_SESSION['timeout'] = time();
	
				$sessionTime = $_SESSION['timeout'] + 10 * 60;
				
				header("location:translate.php");

	
			}

		}
		//user create account
		if(!empty($_POST['name_signUp']) && !empty($_POST['lastname_signup']) && !empty($_POST['email_signup']) && !empty($_POST['password_signup']) && !empty($_POST['repassword_signup']))
		{
			$data=$setup->userSignUp($_POST['name_signUp'],$_POST['lastname_signup'],$_POST['email_signup'],$_POST['password_signup']);
			if($data=="success")
			{
				$_SESSION['name']=$_POST['name_signUp'];
				$_SESSION['lastName']=$_POST['lastname_signup'];
				$_SESSION['email']=$_POST['email_signup'];
				$_SESSION['password']=$_POST['password_signup'];
				$_SESSION['timeout'] = time();
	
				$sessionTime = $_SESSION['timeout'] + 10 * 60;
				
				header("location:translate.php");
			}
		}
		//Edit Account
		if(!empty($_POST['name_update']) && !empty($_POST['lastname_update']) && !empty($_POST['password_update']) && isset($_SESSION['email']))
		{
			$update=$setup->update_account($_POST['name_update'],$_POST['lastname_update'],$_POST['password_update'],$_SESSION['email']);
			if($update=="success")
			{
				$_SESSION['name']=$_POST['name_update'];
				$_SESSION['lastName']=$_POST['lastname_update'];
				$_SESSION['password']=$_POST['password_update'];
				header("location:translate.php");
			}
			else
			{
				die("Failed to update profile");
			}
		}
	}


?>