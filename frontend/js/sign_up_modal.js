
var modal=document.getElementById("signUp_modal");
var signUpBt=document.getElementById("createAccount");
var signUpModal_close=document.getElementsByClassName("close")[0];

signUpBt.onclick=function()
{
	modal.style.display="block";
}
signUpModal_close.onclick=function()
{
	modal.style.display="none";
}
window.onclick=function(event)
{
	if(event.target==modal)
	{

		modal.style.display="none";
	}
}
/*if(info=="success")
				{
					//window.location("chat.php");

				}
				else
				{
					document.getElementById("msg").style.display="block";
					document.getElementById("msg").innerHTML="Failed to create an account";
					return false;
				}*/
