/* this is called because it will show error if the whole function is not loaded in to the 
page and to handle this we call this function
*/
window.onload= function ()
{

  //this function will first trim the spaces and then check if it is valid or not.
  $("#firstName").blur(function(){ 
    var x = $("#firstName").value.trim();
    if( x == "" )
    {
      $("#message1").style.visibility="visible";
      return false;
    }
    else{
      $("#message1").style.visibility="hidden";
    }
  });


  //this function will first trim the spaces and then check if it is valid or not
  $("#lastName").blur(function(){ 
    if( document.studentDetails.lastName.value.trim() == "" )
    {
      $("#message2").style.visibility="visible";
      return false;
    }
    else{
      $("#message2").style.visibility="hidden";
    }
  });

  
  //this function will check if the field is empty or is in the range between 1 to 10
  $("#class").blur(function(){
    if( document.studentDetails.class.value.trim() == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1  )
    {
      $("#message3").style.visibility="visible";
      return false;
    }
    else{
      $("#message3").style.visibility="hidden";
    }
   });


  /*isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  if it finds any illegal number then it will show error
  */
  $("#dob").blur(function(){
    var x = $("#dob").value;
    if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
    {
      $("#message4").style.visibility = "visible";
      return false;
    }  
    else{
      $("#message4").style.visibility="hidden";
    }
   });


  // this function will check if the entry field is empty or not.
  $("#fatherName").blur(function(){
    if( document.studentDetails.fatherName.value.trim() == "" )
    {
      $("#message6").style.visibility="visible";
      return false;
    }
    else{
      $("#message6").style.visibility="hidden";
    }
   });

  // this function will check if the entry field is empty or not.
  $("#motherName").blur(function(){
    if( document.studentDetails.motherName.value.trim() == "" )
    {
      $("#message7").style.visibility="visible";
      return false;
    }
    else{
      $("#message7").style.visibility="hidden";
    }
   });


  /*here we are checkin the position of the symbol "@" and the symbol "."
  if the indexof @ is greater than . then it will cast an error
  */
  $("#email").blur(function(){
    if(document.studentDetails.email.value.trim()!="")
    {
      var emailID = $("#email").value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
            
      if (atpos < 1 || ( dotpos - atpos < 2 ))
      {
        $("#message8").style.visibility="visible";
        return false;
      }
      else{
        $("#message8").style.visibility="hidden";
      }
    }
    else
    {
      $("#message8").style.visibility="visible";
    }
   });

  /* it will check if the entered number is of 10 digit or not
  and if it is 10 digit , it checks if it has any character has 
  any symbol other than digits or not and checks if it is empty
  */
  $("#phoneNumber").blur(function(){
    if( document.studentDetails.phoneNumber.value.trim() == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
    {
      $("#message9").style.visibility="visible";
      return false;
    }	
    else{
      $("#message9").style.visibility="hidden";
    }
   });

  /*first of all it checks if the email id empty or not if not
  here we are checkin the position of the symbol "@" and the symbol "."
  if the indexof @ is greater than . then it will cast an error 
  */
  $("#altMail").blur(function(){
    if(document.studentDetails.altMail.value.trim() != "" )
    {
      if(document.studentDetails.email.value == document.studentDetails.altMail.value)
      {
        $("#message22").style.visibility="visible";
        return false;
      }
      else{
        $("#message22").style.visibility="hidden";
      }
      var emailID = $("#altMail").value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
            
      if (atpos < 1 || ( dotpos - atpos < 2 ))
      {
        $("#message22").style.visibility="visible";
        return false;
      }
      else{
        $("#message22").style.visibility="hidden";
      }
    }
    else{
      $("#message22").style.visibility="hidden";
    }  
   });

  /* first it checks if the entered element is empty or not , if not then
  it will check if the entered number is of 10 digit or not
  and if it is 10 digit , it checks if it has any character has 
  any symbol other than digits or not and checks if it is empty
  */
  $("#altPhoneNumber").blur(function(){
    if(document.studentDetails.altPhoneNumber.value.trim()!="")
    {
      if(isNaN( document.studentDetails.altPhoneNumber.value) || document.studentDetails.altPhoneNumber.value.length != 10 || document.studentDetails.phoneNumber.value == document.studentDetails.altPhoneNumber.value )
      {
        $("#message23").style.visibility="visible";
        return false;
      }	
      else{
        $("#message23").style.visibility="hidden";
      }
    }
    else{
      $("#message23").style.visibility="hidden";
    }  
   });
  /*it checks if the address1 field is not left empty and if left then it asks user 
  to enter the data
  */
  $("#address1").blur(function(){
    if( document.studentDetails.address1.value.trim() == "" )
    {
      $("#message10").style.visibility="visible";
      return false;
    }
    else{
      $("#message10").style.visibility="hidden";
    }
   });

  /*it checks if the address2 field is not left empty and if left then it asks user 
  to enter the data
  */
  $("#address2").blur(function(){
    if( document.studentDetails.address2.value.trim() == "" )
    {
      $("#message11").style.visibility="visible";
      return false;
    }  
    else{
      $("#message11").style.visibility="hidden";
    }
   });


  /*it checks if the district field is not left empty and if left then it asks user 
  to enter the data
  */
  $("#district").blur(function(){
    if( document.studentDetails.district.value.trim() == "" )
    {
      $("#message12").style.visibility="visible";
      return false;
    } 
    else{
      $("#message12").style.visibility="hidden";
    }
   });
  /*it checks if the state field is not left empty and if left then it asks user 
  to enter the data
  */
  $("#state").blur(function(){
    if( document.studentDetails.state.value.trim() == "" )
    {
      $("#message13").style.visibility="visible";
      return false;
    } 
    else{
      $("#message13").style.visibility="hidden";
    }
   });


  /* it first checks if the pin is empty or not and if not it checks if it has 
  any charcyter other than numbers and finally it checks if the length is less than
  6 digits number
  */
  $("#pinCode").blur(function(){
    if( document.studentDetails.pinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
    {
      $("#message14").style.visibility="visible";
      return false;
    }
    else{
      $("#message14").style.visibility="hidden";
    }
   });

  /*it has first select element whose value id "-1" and if the user have not selected
  any country it ask ser to select a country from the given list
  */

  $("#country").blur(function(){
    if( document.studentDetails.country.value == "-1" )
    {
      $("#message15").style.visibility="visible";
      return false;
    } 
    else{
      $("#message15").style.visibility="hidden";
    }
   });

  /*it checks if the address1 field is not left empty and if left then it asks user 
  to enter the data
  */

  $("#pAddress1").blur(function(){
    if( document.studentDetails.pAddress1.value.trim() == "" )
    {
      $("#message16").style.visibility="visible";
      return false;
    }
    else{
      $("#message16").style.visibility="hidden";
    }
   });

  /*it checks if the address2 field is not left empty and if left then it asks user 
  to enter the data
  */
   
  $("#pAddress2").blur(function(){
    if( document.studentDetails.pAddress2.value.trim() == "" )
    {
      $("#message17").style.visibility="visible";
      return false;
    }  
    else{
      $("#message17").style.visibility="hidden";
    }
   });

  /*it checks if the district field is not left empty and if left then it asks user 
  to enter the data
  */
  $("#pDistrict").blur(function(){
    if( document.studentDetails.pDistrict.value.trim() == "" )
    {
      $("#message18").style.visibility="visible";
      return false;
    } 
    else{
      $("#message18").style.visibility="hidden";
    }
   });


  /*it checks if the state field is not left empty and if left then it asks user 
  to enter the data
  */ 
  $("#pState").blur(function(){
    if( document.studentDetails.state.value.trim() == "" )
    {
      $("#message19").style.visibility="visible";
      return false;
    } 
    else{
      $("#message19").style.visibility="hidden";
    }
   });


  /* it first checks if the pin is empty or not and if not it checks if it has 
  any charcyter other than numbers and finally it checks if the length is less than
  6 digits number
  */
  $("#pPinCode").blur(function(){
    if( document.studentDetails.pPinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
    {
      $("#message20").style.visibility="visible";
      return false;
    }
    else{
      $("#message20").style.visibility="hidden";
    }
   });


  /*it has first select element whose value id "-1" and if the user have not selected
  any country it ask ser to select a country from the given list
  */
  $("#pCountry").blur(function(){
    if( document.studentDetails.pCountry.value == "-1" )
    {
      $("#message21").style.visibility="visible";
      return false;
    } 
    else{
      $("#message21").style.visibility="hidden";
    }
   });


}

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




/* this function checks if the necessary fields values are entered or not
because in the function call "onblur()" if someone doesnot enter to a field 
then it will not show any error messages so when this validate() is called it 
checks each and every requied fields and if it is true then it calls a functon
addRow() which adds the elements to the table
*/

function validate(tableID)
{
  var x = $("#firstName").value.trim();
  //this function will first trim the spaces and then check if it is valid or not.
  if( x == "" )
  {
    $("#message1").style.visibility="visible";
  }
  else{
    $("#message1").style.visibility="hidden";
  }

  //this function will first trim the spaces and then check if it is valid or not
  if( document.studentDetails.lastName.value.trim() == "" )
  {
    $("#message2").style.visibility="visible";
  }
  else{
    $("#message2").style.visibility="hidden";
  }

  //this function will check if the field is empty or is in the range between 1 to 10
  if( document.studentDetails.class.value == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1 )
  {
    $("#message3").style.visibility="visible";
  }
  else{
    $("#message3").style.visibility="hidden";
  }

  /*isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  if it finds any illegal number then it will show error
  */
  var x = $("#dob").value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    $("#message4").style.visibility = "visible";
  }  
  else{
    $("#message4").style.visibility="hidden";
  }

  // this function will check if the entry field is empty or not.
  if( document.studentDetails.fatherName.value == "" )
  {
    $("#message6").style.visibility="visible";
  }
  else{
    $("#message6").style.visibility="hidden";
  }

  // this function will check if the entry field is empty or not.
  if( document.studentDetails.motherName.value == "" )
  {
    $("#message7").style.visibility="visible";
  }
  else{
    $("#message7").style.visibility="hidden";
  }

  
  /*here we are checkin the position of the symbol "@" and the symbol "."
  if the indexof @ is greater than . then it will cast an error
  */
  var emailID = $("#email").value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
         
  if (atpos < 1 || ( dotpos - atpos < 2 ))
  {
    $("#message8").style.visibility="visible";
  }
  else{
    $("#message8").style.visibility="hidden";
  }

  /* it will check if the entered number is of 10 digit or not
  and if it is 10 digit , it checks if it has any character has 
  any symbol other than digits or not and checks if it is empty
  */  
	if( document.studentDetails.phoneNumber.value == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    $("#message9").style.visibility="visible";
  }	
  else{
    $("#message9").style.visibility="hidden";
  }


  /*it checks if the address1 field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.address1.value == "" )
  {
    $("#message10").style.visibility="visible";
  }
  else{
    $("#message10").style.visibility="hidden";
  }

  /*it checks if the address2 field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.address2.value == "" )
  {
    $("#message11").style.visibility="visible";
  }  
  else{
    $("#message11").style.visibility="hidden";
  } 

  /*it checks if the district field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.district.value == "" )
  {
    $("#message12").style.visibility="visible";
  } 
  else{
    $("#message12").style.visibility="hidden";
  } 
  
  /*it checks if the state field is not left empty and if left then it asks user 
  to enter the data
  */  
  if( document.studentDetails.state.value == "" )
  {
    $("#message13").style.visibility="visible";
  } 
  else{
    $("#message13").style.visibility="hidden";
  }
  
  /* it first checks if the pin is empty or not and if not it checks if it has 
  any charcyter other than numbers and finally it checks if the length is less than
  6 digits number
  */
  if( document.studentDetails.pinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message14").style.visibility="visible";
  }
  else{
    $("#message14").style.visibility="hidden";
  }

  /*it has first select element whose value id "-1" and if the user have not selected
  any country it ask ser to select a country from the given list
  */
  if( document.studentDetails.country.value == "-1" )
  {
    $("#message15").style.visibility="visible";
  } 
  else{
    $("#message15").style.visibility="hidden";
  }

  /*it checks if the address1 field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.pAddress1.value == "" )
  {
    $("#message16").style.visibility="visible";
  }
  else{
    $("#message16").style.visibility="hidden";
  }

  /*it checks if the address2 field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.pAddress2.value == "" )
  {
    $("#message17").style.visibility="visible";  
  }  
  else{
    $("#message17").style.visibility="hidden";
  }

  /*it checks if the district field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.pDistrict.value == "" )
  {
    $("#message18").style.visibility="visible";  
  } 
  else{
    $("#message18").style.visibility="hidden";
  }

  /*it checks if the state field is not left empty and if left then it asks user 
  to enter the data
  */
  if( document.studentDetails.pState.value == "" )
  {
    $("#message19").style.visibility="visible";
  } 
  else{
    $("#message19").style.visibility="hidden";
  }

  /* it first checks if the pin is empty or not and if not it checks if it has 
  any charcyter other than numbers and finally it checks if the length is less than
  6 digits number
  */
  if( document.studentDetails.pPinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message20").style.visibility="visible";
    
  }
  else{
    $("#message20").style.visibility="hidden";
  }

  /*it has first select element whose value id "-1" and if the user have not selected
  any country it ask ser to select a country from the given list
  */
  if( document.studentDetails.pCountry.value == "-1" )
  {
    $("#message21").style.visibility="visible";
  } 
  else{
    $("#message21").style.visibility="hidden";
    
  }



  /* the following lines of code are written because it will now check if
  the user has visited all the required field or not and if the user haven't 
  visited any field it will focus to the top most element where the user needs
  to enter the data and this validation is done second time because in the 
  first validation section user can see all the fields where he haven't entered 
  the data and here it will focus to required elements one by one
  */

  var x = $("#firstName").value.trim();
  if( x == "" )
  {
    $("#message1").style.visibility="visible";
    document.studentDetails.firstName.focus()
    return false;
    
  }
  else{
    $("#message1").style.visibility="hidden";
  }


  if( document.studentDetails.lastName.value.trim() == "" )
  {
    $("#message2").style.visibility="visible";
    document.studentDetails.lastName.focus()
    return false;
  }
  else{
    $("#message2").style.visibility="hidden";
  }


  if( document.studentDetails.class.value == "" || document.studentDetails.class.value>10 || document.studentDetails.class.value<1 )
  {
    $("#message3").style.visibility="visible";
    document.studentDetails.class.focus() ;
    return false;
  }
  else{
    $("#message3").style.visibility="hidden";
  }


  var x = $("#dob").value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    $("#message4").style.visibility = "visible";
    document.studentDetails.dob.focus();
    return false;
  }  
  else{
    $("#message4").style.visibility="hidden";
  }


  if( document.studentDetails.fatherName.value.trim() == "" )
  {
    $("#message6").style.visibility="visible";
    document.studentDetails.fatherName.focus() ;
    return false;
  }
  else{
    $("#message6").style.visibility="hidden";
  }


  if( document.studentDetails.motherName.value.trim() == "" )
  {
    $("#message7").style.visibility="visible";
    document.studentDetails.motherName.focus() ;
    return false;
  }
  else{
    $("#message7").style.visibility="hidden";
  }

  if(document.studentDetails.email.value.trim()!="")
  {
    var emailID = $("#email").value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
          
    if (atpos < 1 || ( dotpos - atpos < 2 ))
    {
      $("#message8").style.visibility="visible";
      $("#email").focus() ;
      return false;
    }
    else{
      $("#message8").style.visibility="hidden";
    }
  }
  else
  {
    $("#message8").style.visibility="visible";
    $("#email").focus() ;
    return false;
  }


	if( document.studentDetails.phoneNumber.value.trim() == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    $("#message9").style.visibility="visible";
    document.studentDetails.phoneNumber.focus() ;
    return false;
  }	
  else{
    $("#message9").style.visibility="hidden";
  }


  if( document.studentDetails.address1.value.trim() == "" )
  {
    $("#message10").style.visibility="visible";
    document.studentDetails.address1.focus() ;
    return false;
  }
  else{
    $("#message10").style.visibility="hidden";
  }


  if( document.studentDetails.address2.value.trim() == "" )
  {
    $("#message11").style.visibility="visible";
    document.studentDetails.address2.focus() ;
    return false;
  }  
  else{
    $("#message11").style.visibility="hidden";
  } 


  if( document.studentDetails.district.value.trim() == "" )
  {
    $("#message12").style.visibility="visible";
    document.studentDetails.district.focus() ;
    return false;
  } 
  else{
    $("#message12").style.visibility="hidden";
  }  


  if( document.studentDetails.state.value.trim() == "" )
  {
    $("#message13").style.visibility="visible";
    document.studentDetails.state.focus() ;
    return false;
  } 
  else{
    $("#message13").style.visibility="hidden";
  }  


  if( document.studentDetails.pinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message14").style.visibility="visible";
    document.studentDetails.pinCode.focus() ;
    return false;
  }
  else{
    $("#message14").style.visibility="hidden";
  }


  if( document.studentDetails.country.value == "-1" )
  {
    $("#message15").style.visibility="visible";
    document.studentDetails.country.focus() ;
    return false;
  } 
  else{
    $("#message15").style.visibility="hidden";
  }


  if( document.studentDetails.pAddress1.value.trim() == "" )
  {
    $("#message16").style.visibility="visible";
    document.studentDetails.pAddress1.focus() ;
    return false;
  }
  else{
    $("#message16").style.visibility="hidden";
  }


  if( document.studentDetails.pAddress2.value.trim() == "" )
  {
    $("#message17").style.visibility="visible";
    document.studentDetails.pAddress2.focus() ;
    return false;
    
  }  
  else{
    $("#message17").style.visibility="hidden";
  }


  if( document.studentDetails.pDistrict.value.trim() == "" )
  {
    $("#message18").style.visibility="visible";
    document.studentDetails.pDistrict.focus() ;
    return false;
    
  } 
  else{
    $("#message18").style.visibility="hidden";
  }


  if( document.studentDetails.state.value.trim() == "" )
  {
    $("#message19").style.visibility="visible";
    document.studentDetails.pState.focus() ;
    return false;
  } 
  else{
    $("#message19").style.visibility="hidden";
  }


  if( document.studentDetails.pPinCode.value.trim() == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    $("#message20").style.visibility="visible";
    document.studentDetails.pPinCode.focus() ;
    return false;
  }
  else{
    $("#message20").style.visibility="hidden";
  }


  if( document.studentDetails.pCountry.value == "-1" )
  {
    $("#message21").style.visibility="visible";
    document.studentDetails.pCountry.focus() ;
    return false;
  } 
  else{
    $("#message21").style.visibility="hidden";
    
  }
  var i;
  var j=0;
  var k=9;
  var z;
  var table= $("#myTable");
  if(table.rows.length>1){    
    
    for(i=1;i<table.rows.length;i++)
    {
      z=$("#myTable").rows[i].cells[k].innerHTML;
      if(z==$("#email").value)
      {
        alert("this email have been used");
        document.studentDetails.email.focus() ;

        j=1;
      }
    }
  }
  if(j==0)
  {
    addRow(tableID);

  }
}




/*this function will create the table taking all the values from the input 
fields of the form and stores them in the table and then it resets the form
 so that the input firls should no longer be seen in this.
 */
function addRow(tableID)
{
    var table = $("#myTable");
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var cell0 = row.insertCell(0);
    cell0.innerHTML=table.rows.length-1;
    var cell1 = row.insertCell(1);
    cell1.innerHTML = '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">'
    var cell2 = row.insertCell(2);
    cell2.innerHTML = '<input type="button" value = "Edit" onClick="Javacsript:editRow(this)">'
    var cell3 = row.insertCell(3);
    cell3.innerHTML=document.studentDetails.firstName.value;
    var cell4 = row.insertCell(4);
    cell4.innerHTML=document.studentDetails.lastName.value;
    var cell5 = row.insertCell(5);
    cell5.innerHTML=document.studentDetails.class.value;
    var cell6 = row.insertCell(6);
    cell6.innerHTML=document.studentDetails.dob.value;
    var cell7 = row.insertCell(7);
    cell7.innerHTML=document.studentDetails.fatherName.value;
    var cell8 = row.insertCell(8);
    cell8.innerHTML=document.studentDetails.motherName.value;
    var cell9 = row.insertCell(9);
    cell9.innerHTML=document.studentDetails.email.value;
    var cell10 = row.insertCell(10);
    cell10.innerHTML=document.studentDetails.phoneNumber.value;
    var cell11 = row.insertCell(11);
    cell11.innerHTML = document.studentDetails.altMail.value;
    var cell12 = row.insertCell(12);
    cell12.innerHTML = document.studentDetails.altPhoneNumber.value;
    var cell13 = row.insertCell(13);
    cell13.innerHTML=document.studentDetails.address1.value;
    var cell14 = row.insertCell(14);
    cell14.innerHTML=document.studentDetails.address2.value;
    var cell15 = row.insertCell(15);
    cell15.innerHTML=document.studentDetails.district.value;
    var cell16 = row.insertCell(16);
    cell16.innerHTML=document.studentDetails.state.value;
    var cell17 = row.insertCell(17);
    cell17.innerHTML=document.studentDetails.pinCode.value;
    var cell18 = row.insertCell(18);
    cell18.innerHTML=document.studentDetails.country.value;
    var cell19 = row.insertCell(19);
    cell19.innerHTML=document.studentDetails.pAddress1.value;
    var cell20 = row.insertCell(20);
    cell20.innerHTML=document.studentDetails.pAddress2.value;
    var cell21 = row.insertCell(21);
    cell21.innerHTML = document.studentDetails.pDistrict.value;
    var cell22 = row.insertCell(22);
    cell22.innerHTML = document.studentDetails.pState.value;
    var cell23 = row.insertCell(23);
    cell23.innerHTML=document.studentDetails.pPinCode.value;
    var cell24 = row.insertCell(24);
    cell24.innerHTML=document.studentDetails.pCountry.value;
    $("#myForm").reset();
    return false;
  
}



/*when we click on this editRow() the it copies all the fields from the 
form to the table and after this it calls the deleteRow() so that after 
loading the table entries to the form it will not show the values in
the table*/

function editRow(obj)
{
  var row = obj.parentNode.parentNode.rowIndex;
  table=$("#myTable").rows[row];
  $("#firstName").value = table.cells[3].innerHTML;
  $("#lastName").value = table.cells[4].innerHTML;
  $("#class").value = table.cells[5].innerHTML;
  $("#dob").value = table.cells[6].innerHTML;
  $("#fatherName").value = table.cells[7].innerHTML;
  $("#motherName").value = table.cells[8].innerHTML;
  $("#email").value = table.cells[9].innerHTML;
  $("#phoneNumber").value = table.cells[10].innerHTML;
  $("#altMail").value = table.cells[11].innerHTML;
  $("#altPhoneNumber").value = table.cells[12].innerHTML;
  $("#address1").value = table.cells[13].innerHTML;
  $("#address2").value = table.cells[14].innerHTML;
  $("#district").value = table.cells[15].innerHTML;
  $("#state").value = table.cells[16].innerHTML;
  $("#pinCode").value = table.cells[17].innerHTML;
  $("#country").value=table.cells[18].innerHTML;
  $("#pAddress1").value = table.cells[19].innerHTML;
  $("#pAddress2").value = table.cells[20].innerHTML;
  $("#pDistrict").value = table.cells[21].innerHTML;
  $("#pState").value = table.cells[22].innerHTML;
  $("#pPinCode").value = table.cells[23].innerHTML;
  $("#pCountry").value=table.cells[24].innerHTML;
  var index = obj.parentNode.parentNode.rowIndex;
  var table = $("#myTable");
  table.deleteRow(index);
  
}

/* it will delete the current row where it will be clicked
*/
function deleteRow(obj) {
    
  var index = obj.parentNode.parentNode.rowIndex;
  var table = $("#myTable");
  table.deleteRow(index);
}
