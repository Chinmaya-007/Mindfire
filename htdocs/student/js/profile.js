/*
* 
* this is called because it will show error if the whole function is not loaded in to the 
*page and to handle this we call this function
*
*
*
*
* @param void
* @return true/false
*/
var tIndex=1;
var indicator=1;
var j=0;
$(document).ready(function(){
  /*
  * 
  * this function will first trim the spaces and then check if it is valid or not
  *
  *
  *
  * @param void
  * @return true/false
  */

 $("#myForm input").prop("disabled", true);
 $("#myForm select").prop("disabled", true);
 document.getElementById("btn").disabled = false;
  $("#firstName").blur(function(){ 
    if( document.studentDetails.firstName.value.trim()== "" )
    {
      $("#message1").show();
      return false;
    }
    else{
      $("#message1").hide();
    }
  });


  /*
  * 
  * this function will first trim the spaces and then check if it is valid or not
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#lastName").blur(function(){ 
    if( document.studentDetails.lastName.value.trim() == "" )
    {
      $("#message2").show();
      return false;
    }
    else{
      $("#message2").hide();
    }
  });

  
  
  /*
  * 
  *this function will check if the field is empty or is in the range between 1 to 10
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#class").blur(function(){
    if( document.studentDetails.class.value.trim() == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1  )
    {
      $("#message3").show();
      return false;
    }
    else{
      $("#message3").hide();
    }
   });



  /*
  * 
  *isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  *we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  *if it finds any illegal number then it will show error
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#dob").blur(function(){
    var x = document.studentDetails.dob.value;
    if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
    {
      $("#message4").show();
      return false;
    }  
    else{
      $("#message4").hide();
    }
   });


  /*
  * 
  *this function will check if the entry field is empty or not.
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#fatherName").blur(function(){
    if( document.studentDetails.fatherName.value.trim() == "" )
    {
      $("#message6").show();
      return false;
    }
    else{
      $("#message6").hide();
    }
   });

  /*
  * 
  *this function will check if the entry field is empty or not.
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#motherName").blur(function(){
    if( document.studentDetails.motherName.value.trim() == "" )
    {
      $("#message7").show();
      return false;
    }
    else{
      $("#message7").hide();
    }
   });


  /*
  * 
  *first of all it checks if the email id empty or not if not
  *here we are checkin the position of the symbol "@" and the symbol "."
  *if the indexof @ is greater than . then it will cast an error 
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#email").blur(function(){
    if(document.studentDetails.email.value.trim()!="")
    {
      var emailID = document.studentDetails.email.value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
            
      if (atpos < 1 || ( dotpos - atpos < 2 ))
      {
        $("#message8").show();
        return false;
      }
      else{
        $("#message8").hide();
      }
    }
    else
    {
      $("#message8").show();
    }
   });

  /*
  * 
  * first it checks if the entered element is empty or not , if not then
  *it will check if the entered number is of 10 digit or not
  *and if it is 10 digit , it checks if it has any character has 
  *any symbol other than digits or not and checks if it is empty
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#phoneNumber").blur(function(){
    if( document.studentDetails.phoneNumber.value.trim() == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
    {
      $("#message9").show();
      return false;
    }	
    else{
      $("#message9").hide();
    }
   });
  /*
  * 
  * first it checks if the entered password is of length 8 or not.
  *
  *
  *
  * @param void
  * @return true/false
  */
 $("#password").blur(function(){
  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length != 8 )
  {
    $("#message24").show();
    return false;
  }	
  else{
    $("#message24").hide();
  }
 });

  /*
  * 
  * first it checks if the entered password is same as confirm password or not.
  *
  *
  *
  * @param void
  * @return true/false
  */
 $("#cPassword").blur(function(){
  if( document.studentDetails.password.value!=document.studentDetails.cPassword.value)
  {
    $("#message25").show();
    return false;
  }	
  else{
    $("#message25").hide();
  }
 });

  /*
  * 
  *first of all it checks if the email id empty or not if not
  *here we are checkin the position of the symbol "@" and the symbol "."
  *if the indexof @ is greater than . then it will cast an error 
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#altMail").blur(function(){
    if(document.studentDetails.altMail.value.trim() != "" )
    {
      if(document.studentDetails.email.value == document.studentDetails.altMail.value)
      {
        $("#message22").show();
        return false;
      }
      else{
        $("#message22").hide();
      }
      var emailID = document.studentDetails.altMail.value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
            
      if (atpos < 1 || ( dotpos - atpos < 2 ))
      {
        $("#message22").show();
        return false;
      }
      else{
        $("#message22").hide();
      }
    }
    else{
      $("#message22").hide();
    }  
   });


  /*
  * 
  * first it checks if the entered element is empty or not , if not then
  *it will check if the entered number is of 10 digit or not
  *and if it is 10 digit , it checks if it has any character has 
  *any symbol other than digits or not and checks if it is empty
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#altPhoneNumber").blur(function(){
    if(document.studentDetails.altPhoneNumber.value.trim()!="")
    {
      if(isNaN( document.studentDetails.altPhoneNumber.value) || document.studentDetails.altPhoneNumber.value.length != 10 || document.studentDetails.phoneNumber.value == document.studentDetails.altPhoneNumber.value )
      {
        $("#message23").show();
        return false;
      }	
      else{
        $("#message23").hide();
      }
    }
    else{
      $("#message23").hide();
    }  
   });
  /*
  * 
  *it checks if the address1 field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#address1").blur(function(){
    if( document.studentDetails.address1.value.trim() == "" )
    {
      $("#message10").show();
      return false;
    }
    else{
      $("#message10").hide();
    }
   });

  /*
  * 
  *it checks if the address2 field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#address2").blur(function(){
    if( document.studentDetails.address2.value.trim() == "" )
    {
      $("#message11").show();
      return false;
    }  
    else{
      $("#message11").hide();
    }
   });


  /*
  * 
  *it checks if the district field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#district").blur(function(){
    if( document.studentDetails.district.value.trim() == "" )
    {
      $("#message12").show();
      return false;
    } 
    else{
      $("#message12").hide();
    }
   });



  /*
  * 
  *it checks if the state field is not left empty and if left then it asks user 
  *to enter the data
  * 
  *
  *
  *
  * @param form
  * @return true/false
  */
  $("#state").blur(function(){
    if( document.studentDetails.state.value.trim() == "" )
    {
      $("#message13").show();
      return false;
    } 
    else{
      $("#message13").hide();
    }
   });


  /*
  * 
  * it first checks if the pin is empty or not and if not it checks if it has 
  *any charcyter other than numbers and finally it checks if the length is less than
  *6 digits number
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#pinCode").blur(function(){
    if( document.studentDetails.pinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
    {
      $("#message14").show();
      return false;
    }
    else{
      $("#message14").hide();
    }
   });


  /*
  * 
  *it has first select element whose value id "-1" and if the user have not selected
  *any country it ask ser to select a country from the given list
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#country").blur(function(){
    if( document.studentDetails.country.value == "-1" )
    {
      $("#message15").show();
      return false;
    } 
    else{
      $("#message15").hide();
    }
   });


  /*
  * 
  *it checks if the address1 field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#pAddress1").blur(function(){
    if( document.studentDetails.pAddress1.value.trim() == "" )
    {
      $("#message16").show();
      return false;
    }
    else{
      $("#message16").hide();
    }
   });


  /*
  * 
  *it checks if the address2 field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#pAddress2").blur(function(){
    if( document.studentDetails.pAddress2.value.trim() == "" )
    {
      $("#message17").show();
      return false;
    }  
    else{
      $("#message17").hide();
    }
   });


  /*
  * 
  *it checks if the district field is not left empty and if left then it asks user 
  *to enter the data
  *
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#pDistrict").blur(function(){
    if( document.studentDetails.pDistrict.value.trim() == "" )
    {
      $("#message18").show();
      return false;
    } 
    else{
      $("#message18").hide();
    }
   });


  
  /*
  * 
  *it checks if the state field is not left empty and if left then it asks user 
  *to enter the data
  * 
  *
  *
  *
  * @param form
  * @return true/false
  */
  $("#pState").blur(function(){
    if( document.studentDetails.pState.value.trim() == "" )
    {
      $("#message19").show();
      return false;
    } 
    else{
      $("#message19").hide();
    }
   });



  /*
  * 
  * it first checks if the pin is empty or not and if not it checks if it has 
  *any charcyter other than numbers and finally it checks if the length is less than
  *6 digits number
  *
  *
  *
  * @param void
  * @return true/false
  */

  $("#pPinCode").blur(function(){
    if( document.studentDetails.pPinCode.value.trim() == "" || isNaN( document.studentDetails.pPinCode.value) || document.studentDetails.pPinCode.value.length != 6 )
    {
      $("#message20").show();
      return false;
    }
    else{
      $("#message20").hide();
    }
   });



  /*
  * 
  *it has first select element whose value id "-1" and if the user have not selected
  *any country it ask ser to select a country from the given list
  *
  *
  *
  * @param void
  * @return true/false
  */
  $("#pCountry").blur(function(){
    if( document.studentDetails.pCountry.value == "-1" )
    {
      $("#message21").show();
      return false;
    } 
    else{
      $("#message21").hide();
    }
   });

   $("#btn").click(function(){
      $("#myForm input").prop("disabled", false);
      $("#myForm select").prop("disabled", false);
      document.getElementById("btn").disabled = true;

    });
  })
  






  /*
  * 
  * on clicking the check box in the form page the current address values gets
  *copied to the permanent address values
  *
  *
  * @param form
  * @return void
  */
 function fillAddress(f)
 {
   var checkbox = $("#filladdress");
   localStorage.setItem('filladdress', checkbox.checked);
   if (f.filladdress.checked == true)
   {
     $("#pAddress1").value = $("#address1").value;
     $("#pAddress2").value = $("#address2").value
     $("#pDistrict").value = $("#district").value;
     $("#pState").value = $("#state").value;
     $("#pPinCode").value = $("#pinCode").value;
     f.pAddress1.value=f.address1.value;
     f.pAddress2.value=f.address2.value;
     f.pDistrict.value=f.district.value;
     f.pState.value=f.state.value;
     f.pCountry.value=f.country.value;
     f.pPinCode.value=f.pinCode.value;       
   }
   else
   {
     $("#pAddress1").value = '';
     $("#pAddress2").value = '';
     $("#pDistrict").value = '';
     $("#pState").value = '';
     $("#pPinCode").value = '';
     f.pAddress1.value='';
     f.pAddress2.value='';
     f.pDistrict.value='';
     f.pState.value='';
     f.pCountry.value='';
     f.pPinCode.value='';
   }
   permanentAdd1Validate();
   permanentAdd2Validate();
   permanentDistValidate();
   permanentStateValidate();
   permanentPinValidate();
   permanentCountryValidate();
 }
 
   /*
   * 
   *it checks if the address1 field is not left empty and if left then it asks user 
   *to enter the data
   *
   *
   * @param void
   * @return true/false
   */
 function permanentAdd1Validate()
 {
   if( document.studentDetails.pAddress1.value.trim() == "" )
   {
     document.getElementById("message16").style.visibility="visible";
     return false;
   }
   else{
     document.getElementById("message16").style.visibility="hidden";
   }
 
 }
 
 
 
   /*
   * 
   *it checks if the address2 field is not left empty and if left then it asks user 
   *to enter the data
   *
   *
   * @param void
   * @return true/false
   */
 function permanentAdd2Validate()
 {
   if( document.studentDetails.pAddress2.value.trim() == "" )
   {
     document.getElementById("message17").style.visibility="visible";
     return false;
   }  
   else{
     document.getElementById("message17").style.visibility="hidden";
   }
 
 }
 
 
 
 
 
   /*
   * 
   *it checks if the district field is not left empty and if left then it asks user 
   *to enter the data
   *
   * @param void
   * @return true/false
   */
 function permanentDistValidate()
 {
   if( document.studentDetails.pDistrict.value.trim() == "" )
   {
     document.getElementById("message18").style.visibility="visible";
     return false;
   } 
   else{
     document.getElementById("message18").style.visibility="hidden";
   }
 }
 
 
 
 
   /*
   * 
   *it checks if the state field is not left empty and if left then it asks user 
   *to enter the data
   *
   *
   *
   *
   * @param void
   * @return true/false
   */
 function permanentStateValidate()
 {
   if( document.studentDetails.state.value.trim() == "" )
   {
     document.getElementById("message19").style.visibility="visible";
     return false;
   } 
   else{
     document.getElementById("message19").style.visibility="hidden";
   }
 }
 
 
 
 
   /*
   * 
   * it first checks if the pin is empty or not and if not it checks if it has 
   *any charcyter other than numbers and finally it checks if the length is less than
   *6 digits number
   *
   *
   *
   * @param void
   * @return true/false
   */
 function permanentPinValidate()
 {
   if( document.studentDetails.pPinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
   {
     document.getElementById("message20").style.visibility="visible";
     return false;
   }
   else{
     document.getElementById("message20").style.visibility="hidden";
   }
 }
 
 
 
 
 
   /*
   * 
   *it has first select element whose value id "-1" and if the user have not selected
   *any country it ask ser to select a country from the given list
   *
   *
   *
   * @param void
   * @return true/false
   */
 function permanentCountryValidate()
 {
   if( document.studentDetails.pCountry.value == "-1" )
   {
     document.getElementById("message21").style.visibility="visible";
     return false;
   } 
   else{
     document.getElementById("message21").style.visibility="hidden";
   }
 }
 
 

  
   /*
   * 
   * this function checks if the necessary fields values are entered or not
   *because in the function call "onblur()" if someone doesnot enter to a field 
   *then it will not show any error messages so when this validate() is called it 
   *checks each and every requied fields and if it is true then it calls a functon
   *addRow() which adds the elements to the table
   *
   *
   * @param table
   * @return true/false
   */
  

function validate(event)
{
  console.log(event);
  //this function will first trim the spaces and then check if it is valid or not.
  if( document.studentDetails.firstName.value.trim() == "" )
  {
    $("#message1").show();
  }
  else{
    $("#message1").hide();
  }

  //this function will first trim the spaces and then check if it is valid or not
  if( document.studentDetails.lastName.value.trim() == "" )
  {
    $("#message2").show();
  }
  else{
    $("#message2").hide();
  }

  //this function will check if the field is empty or is in the range between 1 to 10
  if( document.studentDetails.class.value == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1 )
  {
    $("#message3").show();
  }
  else{
    $("#message3").hide();
  }

  /*isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  *we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  *if it finds any illegal number then it will show error
  */
  var x = document.studentDetails.dob.value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    $("#message4").show();
  }  
  else{
    $("#message4").hide();
  }

  // this function will check if the entry field is empty or not.
  if( document.studentDetails.fatherName.value == "" )
  {
    $("#message6").show();
  }
  else{
    $("#message6").hide();
  }

  // this function will check if the entry field is empty or not.
  if( document.studentDetails.motherName.value == "" )
  {
    $("#message7").show();
  }
  else{
    $("#message7").hide();
  }

  
  /*here we are checkin the position of the symbol "@" and the symbol "."
  *if the indexof @ is greater than . then it will cast an error
  */
  var emailID = document.studentDetails.email.value;
  if(document.studentDetails.email.value.trim()!="")
  {
    var emailID = document.studentDetails.email.value;
    if (IsEmail(emailID)==false)
    {
      $("#message8").show();
    }
    else{
      $("#message8").hide();
    }
  }
  else
  {
    $("#message8").show();
  }
  function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      event.preventDefault();
    }else{
      return true;
    }
  }



  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length != 8 )
  {
    $("#message24").show();
  }	
  else{
    $("#message24").hide();
  }

  if( document.studentDetails.password.value!=document.studentDetails.cPassword.value)
  {
    $("#message25").show();
  }	
  else{
    $("#message25").hide();
  }

  /* it will check if the entered number is of 10 digit or not
  *and if it is 10 digit , it checks if it has any character has 
  *any symbol other than digits or not and checks if it is empty
  */  
	if( document.studentDetails.phoneNumber.value == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    $("#message9").show();
  }	
  else{
    $("#message9").hide();
  }


  /*it checks if the address1 field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.address1.value == "" )
  {
    $("#message10").show();
  }
  else{
    $("#message10").hide();
  }

  /*it checks if the address2 field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.address2.value == "" )
  {
    $("#message11").show();
  }  
  else{
    $("#message11").hide();
  } 

  /*it checks if the district field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.district.value == "" )
  {
    $("#message12").show();
  } 
  else{
    $("#message12").hide();
  } 
  
  /*it checks if the state field is not left empty and if left then it asks user 
  *to enter the data
  */  
  if( document.studentDetails.state.value == "" )
  {
    $("#message13").show();
  } 
  else{
    $("#message13").hide();
  }
  
  /* it first checks if the pin is empty or not and if not it checks if it has 
  *any charcyter other than numbers and finally it checks if the length is less than
  *6 digits number
  */
  if( document.studentDetails.pinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message14").show();
  }
  else{
    $("#message14").hide();
  }

  /*it has first select element whose value id "-1" and if the user have not selected
  *any country it ask ser to select a country from the given list
  */
  if( document.studentDetails.country.value == "-1" )
  {
    $("#message15").show();
  } 
  else{
    $("#message15").hide();
  }

  /*it checks if the address1 field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.pAddress1.value == "" )
  {
    $("#message16").show();
  }
  else{
    $("#message16").hide();
  }

  /*it checks if the address2 field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.pAddress2.value == "" )
  {
    $("#message17").show();  
  }  
  else{
    $("#message17").hide();
  }

  /*it checks if the district field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.pDistrict.value == "" )
  {
    $("#message18").show();  
  } 
  else{
    $("#message18").hide();
  }

  /*it checks if the state field is not left empty and if left then it asks user 
  *to enter the data
  */
  if( document.studentDetails.pState.value == "" )
  {
    $("#message19").show();
  } 
  else{
    $("#message19").hide();
  }

  /* it first checks if the pin is empty or not and if not it checks if it has 
  *any charcyter other than numbers and finally it checks if the length is less than
  *6 digits number
  */
  if( document.studentDetails.pPinCode.value == "" || isNaN( document.studentDetails.pPinCode.value) || document.studentDetails.pPinCode.value.length != 6 )
  {
    $("#message20").show();
    
  }
  else{
    $("#message20").hide();
  }

  /*it has first select element whose value id "-1" and if the user have not selected
  any country it ask ser to select a country from the given list
  */
  if( document.studentDetails.pCountry.value == "-1" )
  {
    $("#message21").show();
  } 
  else{
    $("#message21").hide();
    
  }


 
  /*
  * 
  *the following lines of code are written because it will now check if
  *the user has visited all the required field or not and if the user haven't 
  *visited any field it will focus to the top most element where the user needs
  *to enter the data and this validation is done second time because in the 
  *first validation section user can see all the fields where he haven't entered 
  *the data and here it will focus to required elements one by one
  *
  *
  * @param void
  * @return void
  */

  
  if( document.studentDetails.firstName.value.trim() == "" )
  {
    $("#message1").show();
    document.studentDetails.firstName.focus();
    event.preventDefault(); return false;
    
  }
  else{
    $("#message1").hide();
  }


  if( document.studentDetails.lastName.value.trim() == "" )
  {
    $("#message2").show();
    document.studentDetails.lastName.focus();
    event.preventDefault(); return false;
  }
  else{
    $("#message2").hide();
  }


  if( document.studentDetails.class.value == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1 )
  {
    $("#message3").show();
    document.studentDetails.class.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message3").hide();
  }


  var x = document.studentDetails.dob.value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    $("#message4").show();
    document.studentDetails.dob.focus();
    event.preventDefault(); return false;
  }  
  else{
    $("#message4").hide();
  }


  if( document.studentDetails.fatherName.value.trim() == "" )
  {
    $("#message6").show();
    document.studentDetails.fatherName.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message6").hide();
  }


  if( document.studentDetails.motherName.value.trim() == "" )
  {
    $("#message7").show();
    document.studentDetails.motherName.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message7").hide();
  }

  var emailID = document.studentDetails.email.value;
  if(document.studentDetails.email.value.trim()!="")
  {
    var emailID = document.studentDetails.email.value;
    if (IsEmail(emailID)==false)
    {
      $("#message8").show();
      $("#email").focus() ;
      event.preventDefault(); return false;
    }
    else{
      $("#message8").hide();
    }
  }
  else
  {
    $("#message8").show();
    $("#email").focus() ;
    event.preventDefault(); return false;
  }


  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length != 8 )
  {
    $("#message24").show();
    $("#password").focus() ;
    event.preventDefault();
    return false;
  }	
  else{
    $("#message24").hide();
  }

  if( document.studentDetails.password.value!=document.studentDetails.cPassword.value)
  {
    $("#message25").show();
    $("#cPassword").focus() ;
    event.preventDefault();
    return false;
  }	
  else{
    $("#message25").hide();
  }

	if( document.studentDetails.phoneNumber.value.trim() == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    $("#message9").show();
    document.studentDetails.phoneNumber.focus() ;
    event.preventDefault(); return false;
  }	
  else{
    $("#message9").hide();
  }


  if( document.studentDetails.address1.value.trim() == "" )
  {
    $("#message10").show();
    document.studentDetails.address1.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message10").hide();
  }


  if( document.studentDetails.address2.value.trim() == "" )
  {
    $("#message11").show();
    document.studentDetails.address2.focus() ;
    event.preventDefault(); return false;
  }  
  else{
    $("#message11").hide();
  } 


  if( document.studentDetails.district.value.trim() == "" )
  {
    $("#message12").show();
    document.studentDetails.district.focus() ;
    event.preventDefault(); return false;
  } 
  else{
    $("#message12").hide();
  }  


  if( document.studentDetails.state.value.trim() == "" )
  {
    $("#message13").show();
    document.studentDetails.state.focus() ;
    event.preventDefault(); return false;
  } 
  else{
    $("#message13").hide();
  }  


  if( document.studentDetails.pinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message14").show();
    document.studentDetails.pinCode.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message14").hide();
  }


  if( document.studentDetails.country.value == "-1" )
  {
    $("#message15").show();
    document.studentDetails.country.focus() ;
    event.preventDefault(); return false;
  } 
  else{
    $("#message15").hide();
  }


  if( document.studentDetails.pAddress1.value.trim() == "" )
  {
    $("#message16").show();
    document.studentDetails.pAddress1.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message16").hide();
  }


  if( document.studentDetails.pAddress2.value.trim() == "" )
  {
    $("#message17").show();
    document.studentDetails.pAddress2.focus() ;
    event.preventDefault(); return false;
    
  }  
  else{
    $("#message17").hide();
  }


  if( document.studentDetails.pDistrict.value.trim() == "" )
  {
    $("#message18").show();
    document.studentDetails.pDistrict.focus() ;
    event.preventDefault(); return false;
    
  } 
  else{
    $("#message18").hide();
  }


  if( document.studentDetails.pState.value.trim() == "" )
  {
    $("#message19").show();
    document.studentDetails.pState.focus() ;
    event.preventDefault(); return false;
  } 
  else{
    $("#message19").hide();
  }


  if( document.studentDetails.pPinCode.value.trim() == "" || isNaN( document.studentDetails.pPinCode.value) || document.studentDetails.pPinCode.value.length != 6 )
  {
    $("#message20").show();
    document.studentDetails.pPinCode.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message20").hide();
  }


  if( document.studentDetails.pCountry.value == "-1" )
  {
    $("#message21").show();
    document.studentDetails.pCountry.focus() ;
    event.preventDefault(); return false;
  } 
  else{
    $("#message21").hide();
    
  }
  return true;

    
}
