<?php
	
	class translator
	{
		private $host;
		private $db_name;
		private $password;
		private $dir_name;

		function __construct($host,$db_name,$password,$dir_name)
		{
			$this->dbh=new PDO('mysql:dbname='.$db_name.';host='.$host.";port=3306",$dir_name, $password);
		}
		//user log in
		function userLogin($email,$password)
		{
			$sql=$this->dbh->prepare("SELECT * FROM users WHERE email=? AND password=?");
			$sql->execute(array($email,$password));

			if($sql->RowCount()==1)
			{
				$update=$this->dbh->prepare("UPDATE users SET login=NOW(), status=? WHERE email=? AND password=?");
				$update->execute(array("online",$email,$password));

				$result=$sql->fetch();

				return $result;

			}
			else
			{
				return "error";
			}

		}
		//User Create account
		function userSignUp($name,$lastname,$email,$password)
		{
			$sql=$this->dbh->prepare("INSERT INTO users(id,name,lastname,email,login,status,password)
								VALUES(NULL,?,?,?,NOW(),?,?)");
			
			if($sql->execute(array($name,$lastname,$email,"online",$password)))
			{
				return "success";
			}
			else
			{
				return "error";
			}
		}
		//User logout
		function user_logout($email,$password)
		{
			$user = $this->dbh->prepare("UPDATE users SET status=? WHERE email=? AND password=?");
			$user->execute(array('offline',$email,$password));
			return "success";
		}
		
		//Delete Account
		function delete_account($email,$password)
		{
			$sql = $this->dbh->prepare("DELETE FROM users WHERE email=? AND password=?");
			$sql->execute(array($email,$password));
			return "success";
		}
		
		function update_account($name,$lastname,$password,$email)
		{
			$update=$this->dbh->prepare("UPDATE `users` SET `name`=?,`lastname`=? ,`password`=? WHERE `email`=?");
			if($update->execute(array($name,$lastname,$password,$email)))
			{
				return "success";
			}
			else
			{
				return "error";
			}
			
		}

	}
?>