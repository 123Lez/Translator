
document.getElementById("btnLogout").onclick=function()
{
	location("index.php");
}
document.getElementById("btnRegister").onclick=function()
{
	location("sign_up.php");
}

/*document.getElementById("btnTranslate").onclick=function()
{


	var user_word=document.getElementById("user_word").value;

	//document.getElementById("user_word").innerHTML=user_word;

	//alert(user_word);

	var xmlhttp2 = new XMLHttpRequest();

	xmlhttp2.onreadystatechange = function()
	{

	    if(this.readyState==4 &&  this.status==200)
	    {
	    	var word=this.responseText;
	    	/*var comma_num=word.search(";");
	    	var sys_word=word.substr(0,comma_num-1);*/
	    	//var sys_def=word.substr(comma_num+1,(word.length()-(comma_num+1)));
	        /*document.getElementById("user_word").innerHTML=sys_word;
	        document.getElementById("user_def").innerHTML=word;*/
/*
	        var translated=word.split(";");
	        document.getElementById("translated_word").innerHTML=translated[3];
	        document.getElementById("transOf").innerHTML="Translation of <strong>"+user_word+"</strong>";
	        document.getElementById("word_type").innerHTML=translated[0];
	        document.getElementById("sepedi_word_example").innerHTML=translated[1];
	        document.getElementById("eng_word_example").innerHTML=translated[2];
*/
	        //document.getElementById("user_def").innerHTML=translated[2];
/*	            	
	    }
	 };
	xmlhttp2.open("GET", "word_translate.php?word="+user_word, true);
 
   
	xmlhttp2.send();


}*/
function myFunction() 
        {
         document.getElementById("myDropdown").classList.toggle("show");
        }

// Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) 
        {
            if (!event.target.matches('.user-img')) 
            {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) 
                {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) 
                    {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }