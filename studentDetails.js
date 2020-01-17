function myFunction(){
 var emailID = document.getElementById("mail").value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.getElementById("mail").focus() ;
            return false;
		}
		
		 return(true);
}
