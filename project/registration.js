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
    $("#submit").click(function(){
      if(validate(event)){
        var firstName= $('#firstName');
        var lastName = $('#lastName');
        var gender = $('#gender');
        var age = $('#age');
        var fatherName= $('#fatherName');
        var motherName= $('#motherName');
        var email= $('#email');
        var password=$('#password');
        var phoneNumber= $('#phoneNumber');  
        var address1= $('#address1');
        var address2= $('#address2');
        var district= $('#district');
        var pinCode= $('#pinCode');

        

        var data={'firstName':firstName.val(),'lastName':lastName.val(),'gender':gender.val(),'age':age.val(),'fatherName':fatherName.val(),'motherName':motherName.val(),'email':email.val(),'password':password.val(),'phoneNumber':phoneNumber.val(),'address1':address1.val(),'address2':address2.val(),'district':district.val(),'pinCode':pinCode.val()};
        //console.log($data);

        $.ajax({
          url: "http://slimapp/api1/register/",
          type: "POST",
          data: data,
          dataType: 'JSON',
          success: function(response,status,xhr) {
            if (response.status==true) {
                //console.log(response.val);
                // localStorage.setItem('val', response.val);
                window.location.href = "http://localhost/project/index";
              }else{
                console.log(response);
              }
            },
              error: function (xhr, status, error) {
                email.html("Something went wrong!");
            
            //var $mystatus=response.status;        
          }
                
        });
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
  var regex_name=/^[a-zA-Z]+$/;
  $("#firstName").blur(function(){ 
    if(!regex_name.test(document.studentDetails.firstName.value.trim()) )
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
    if(!regex_name.test(document.studentDetails.lastName.value.trim()) )
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
 
  $("#gender").blur(function(){
    if( document.studentDetails.gender["selected"].value== "-1"  )
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
  $("#age").blur(function(){
    if(document.studentDetails.age.value.trim() == "" || document.studentDetails.age.value>40 || document.studentDetails.age.value<10)
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
 var regex_name1=/^[a-zA-Z]/;
  $("#fatherName").blur(function(){
    if( !regex_name1.test(document.studentDetails.fatherName.value.trim()))
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
    if( !regex_name1.test(document.studentDetails.motherName.value.trim()) )
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
 var regex_num= /^[6-9][0-9]{9}$/
  $("#phoneNumber").blur(function(){
    if( !regex_num.test(document.studentDetails.phoneNumber.value.trim()) )
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
  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length < 8 )
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
 var regex_city = /^[a-zA-Z][a-zA-Z\s-]+[a-zA-Z]$/;
  $("#address1").blur(function(){
    if( !regex_city.test(document.studentDetails.address1.value.trim()) )
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
    if( !regex_city.test(document.studentDetails.address2.value.trim()) )
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
    if(!regex_city.test(document.studentDetails.district.value.trim()) )
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
  * it first checks if the pin is empty or not and if not it checks if it has 
  *any charcyter other than numbers and finally it checks if the length is less than
  *6 digits number
  *
  *
  *
  * @param void
  * @return true/false
  */
 var regex_zipcode = /^[0-9]{6}$/;
  $("#pinCode").blur(function(){
    if( !regex_zipcode.test(document.studentDetails.pinCode.value.trim()))
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
})
 

function validate(event)
{
  
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
  if( document.studentDetails.gender.value.text == "-1" )
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
  var x = document.studentDetails.age.value;
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
  function IsEmail(email) 
  {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      event.preventDefault();
    }else{
      return true;
    }
  }



  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length< 8 )
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

  
  /*it checks if the address1 field is not left empty and if left then it asks user 
  *to enter the data
  */
 
 
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


  if( document.studentDetails.gender.value.text == "-1" )
  {
    $("#message3").show();
    document.studentDetails.gender.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message3").hide();
  }


 
  if( document.studentDetails.age.value == "" || document.studentDetails.age.value>40 || document.studentDetails.age.value<10)
  {
    $("#message4").show();
    document.studentDetails.age.focus();
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


  if( document.studentDetails.password.value.trim() == "" || document.studentDetails.password.value.length <8 )
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


  if( document.studentDetails.pinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message14").show();
    document.studentDetails.pinCode.focus() ;
    event.preventDefault(); return false;
  }
  else{
    $("#message14").hide();
  }
  return true;

  
}
