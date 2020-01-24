function validation()
{
	var name=document.myform.name_signUp.value;
	var lastname=document.myform.lastname_signup.value;
	var email=document.myform.email_signup.value;
	var password=document.myform.password_signup.value;
	var repassword=document.myform.repassword_signup.value;


	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
//Sign up page validation
	if(name=="" || lastname=="" || email=="" || password=="" || repassword=="")
	{
		document.getElementById("pass").innerHTML = "<div class='alert alert-danger'>Cannot leave the text box empty</div>";
		return false;
	}
	else if(password!=repassword)
	{
		document.getElementById("pass").innerHTML = "<div class='alert alert-danger'>Passwords do not match</div>";
		document.myform.password_signup.focus();
		return false;
	}
	else if(atpos<1||(dotpos-atpos<2))
	{
		document.getElementById("pass").innerHTML = "<div class='alert alert-danger'>Please enter the correct email</div>";
		return false;
	}
	else
	{
		return true;
	}
//Logging in page validation
	
	
}
function validate_sign_in()
{
	//sign in
	var sign_email=document.myform2.email_signIn.value;
	var sign_password=document.myform2.password_signIn.value;
	if(sign_email=="" || sign_password=="")
	{
		document.getElementById("msg").innerHTML="<div class='alert alert-danger'>Cannot leave the text box empty</div>";
		return false;
	}
	else
	{
		return true;
	}
}