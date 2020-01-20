document.studentDetails.submit.addEventListener("click",validate);


function validate()
{
 if( document.studentDetails.firstName.value == "" )
   {
     alert( "Please provide your First name!" );
     document.studentDetails.firstName.focus() ;
     return false;
   }
   if( document.studentDetails.lastName.value == "" )
   {
     alert( "Please provide your Last name!" );
     document.studentDetails.lastName.focus() ;
     return false;
   }
   if( document.studentDetails.class.value == "" )
   {
     alert( "Please provide your class!" );
     document.studentDetails.class.focus() ;
     return false;
   }
   if( document.studentDetails.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.studentDetails.dob.focus() ;
     return false;
   }
   if ( ( studentDetails.gender[0].checked == false ) && ( studentDetails.gender[1].checked == false )&& ( studentDetails.gender[2].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female or Others" );
   return false;
   }   
   if( document.studentDetails.fatherName.value == "" )
   {
     alert( "Please provide your Father's Name!" );
     document.studentDetails.fatherName.focus() ;
     return false;
   }
   if( document.studentDetails.motherName.value == "" )
   {
     alert( "Please provide your Mother's Name!" );
     document.studentDetails.motherName.focus() ;
     return false;
   }
    var emailID = document.getElementById("mail").value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        alert("Please enter correct email ID")
        document.getElementById("mail").focus() ;
        return false;
	}
	if( document.studentDetails.phoneNumber.value == "" ||
			   isNaN( document.studentDetails.phoneNumber.value) ||
			   document.studentDetails.phoneNumber.value.length != 10 )
	   {
		 alert( "Please provide a Mobile No in the format 123." );
		 document.studentDetails.phoneNumber.focus() ;
		 return false;
	}	
   if( document.studentDetails.address1.value == "" )
   {
     alert( "Please provide your Postal Address!" );
     document.studentDetails.address1.focus() ;
     return false;
   }
   if( document.studentDetails.address2.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.studentDetails.address2.focus() ;
     return false;
   }   
   if( document.studentDetails.district.value == "" )
   {
     alert( "Please provide your Select District!" );
     document.studentDetails.district.focus() ;
     return false;
   }   
   if( document.studentDetails.state.value == "" )
   {
     alert( "Please provide your Select State!" );
     document.studentDetails.state.focus() ;
     return false;
   }   
   if( document.studentDetails.pinCode.value == "" ||
           isNaN( document.studentDetails.pinCode.value) ||
           document.studentDetails.pinCode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.studentDetails.pinCode.focus() ;
     return false;
   }
   if( document.myForm.Country.value == "-1" ) {
    alert( "Please provide your country!" );
    return false;
 }   
return( true );
}
function fillAddress(f)
    {
        if (f.filladdress.checked == true)
        {
			f.pAddress1.value=f.address1.value;
            f.pAddress2.value=f.address2.value;
			f.pDistrict.value=f.district.value;
			f.pState.value=f.state.value;
			f.pCountry.value=f.country.value;
			f.pPinCode.value=f.pinCode.value;
           
        }
        else if (filladdress.checked == false)
        {
            f.pAddress1.value='';
            f.pAddress2.value='';
			f.pDistrict.value='';
			f.pState.value='';
			f.pCountry.value='';
			f.pPinCode.value='';

        }

    }