window.onload= function ()
{
  document.getElementById("country").onchange = function() {
    localStorage.setItem('country', document.getElementById("country").value);
  }
  document.getElementById("pCountry").onchange = function() {
    localStorage.setItem('pCountry', document.getElementById("pCountry").value);
  }
  document.getElementById("firstName").addEventListener("blur", fnameValidate);
  document.getElementById("lastName").addEventListener("blur", lnamevalidate);
  document.getElementById("class").addEventListener("blur",classValidate);
  document.getElementById("dob").addEventListener("blur",dobValidate);
  document.getElementById("fatherName").addEventListener("blur",fatherValidate);
  document.getElementById("motherName").addEventListener("blur",motherValidate);
  document.getElementById("email").addEventListener("blur",mailValidate);
  document.getElementById("phoneNumber").addEventListener("blur",phoneValidate);
  document.getElementById("altMail").addEventListener("blur",amailValidate);
  document.getElementById("altPhoneNumber").addEventListener("blur",aphoneValidate);
  document.getElementById("address1").addEventListener("blur",add1Validate);
  document.getElementById("address2").addEventListener("blur",add2Validate);
  document.getElementById("district").addEventListener("blur",distValidate);
  document.getElementById("state").addEventListener("blur",stateValidate);
  document.getElementById("pinCode").addEventListener("blur",pinValidate);
  document.getElementById("country").addEventListener("blur",countryValidate);
  document.getElementById("pAddress1").addEventListener("blur",padd1Validate);
  document.getElementById("pAddress2").addEventListener("blur",padd2Validate);
  document.getElementById("pDistrict").addEventListener("blur",pdistValidate);
  document.getElementById("pState").addEventListener("blur",pstateValidate);
  document.getElementById("pPinCode").addEventListener("blur",ppinValidate);
  document.getElementById("pCountry").addEventListener("blur",pcountryValidate);
  
  

    //this will first trim the spaces and then check if it is valid or not

}
function fnameValidate()
{
  var x = document.getElementById("firstName").value.trim();
  if( x == "" )
  {
    document.getElementById("message1").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message1").style.visibility="hidden";
  }
}
function lnamevalidate()
{
  if( document.studentDetails.lastName.value.trim() == "" )
  {
    document.getElementById("message2").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message2").style.visibility="hidden";
  }
}
function classValidate()
{
  if( document.studentDetails.class.value == "" )
  {
    document.getElementById("message3").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message3").style.visibility="hidden";
  }
}
//isNan checks if it is Not-a-number and if it finds illegal number then it returns true
//we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
//if it finds any illegal number then it will show error
function dobValidate()
{
  var x = document.getElementById("dob").value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    document.getElementById("message4").style.visibility = "visible";
    return false;
  }  
  else{
    document.getElementById("message4").style.visibility="hidden";
  }
}
function fatherValidate()
{
  if( document.studentDetails.fatherName.value == "" )
  {
    document.getElementById("message6").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message6").style.visibility="hidden";
  }
}
function motherValidate()
{
  if( document.studentDetails.motherName.value == "" )
  {
    document.getElementById("message7").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message7").style.visibility="hidden";
  }
}
// here we are checkin the position of the symbol "@" and the symbol "."
// if the indexof @ is greater than . then it will cast an error
function mailValidate()
{
  var emailID = document.getElementById("email").value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
        
  if (atpos < 1 || ( dotpos - atpos < 2 ))
  {
    document.getElementById("message8").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message8").style.visibility="hidden";
  }
}
function phoneValidate()
{
  if( document.studentDetails.phoneNumber.value == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
  {
    document.getElementById("message9").style.visibility="visible";
    return false;
  }	
  else{
    document.getElementById("message9").style.visibility="hidden";
  }

}
function amailValidate()
{
  
  if(document.studentDetails.altMail.value != "" )
  {
    if(document.studentDetails.email.value == document.studentDetails.altMail.value)
    {
      document.getElementById("message22").style.visibility="visible";
      return false;
    }
    else{
      document.getElementById("message22").style.visibility="hidden";
    }
    var emailID = document.getElementById("altMail").value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
          
    if (atpos < 1 || ( dotpos - atpos < 2 ))
    {
      document.getElementById("message22").style.visibility="visible";
      return false;
    }
    else{
      document.getElementById("message22").style.visibility="hidden";
    }
  }
  
}
function aphoneValidate()
{
  if(document.studentDetails.altPhoneNumber.value!="")
  {
    if(isNaN( document.studentDetails.altPhoneNumber.value) || document.studentDetails.altPhoneNumber.value.length != 10 || document.studentDetails.phoneNumber.value == document.studentDetails.altPhoneNumber.value )
    {
      document.getElementById("message23").style.visibility="visible";
      return false;
    }	
    else{
      document.getElementById("message23").style.visibility="hidden";
    }
  }

}
function add1Validate()
{
  if( document.studentDetails.address1.value == "" )
  {
    document.getElementById("message10").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message10").style.visibility="hidden";
  }

}
function add2Validate()
{
  if( document.studentDetails.address2.value == "" )
  {
    document.getElementById("message11").style.visibility="visible";
    return false;
  }  
  else{
    document.getElementById("message11").style.visibility="hidden";
  }

}
function distValidate()
{
  if( document.studentDetails.district.value == "" )
  {
    document.getElementById("message12").style.visibility="visible";
    return false;
  } 
  else{
    document.getElementById("message12").style.visibility="hidden";
  }
}
function stateValidate()
{
  if( document.studentDetails.state.value == "" )
  {
    document.getElementById("message13").style.visibility="visible";
    return false;
  } 
  else{
    document.getElementById("message13").style.visibility="hidden";
  }
}
function pinValidate()
{
  if( document.studentDetails.pinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message14").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message14").style.visibility="hidden";
  }
}
function countryValidate()
{
  if( document.studentDetails.country.value == "-1" )
  {
    document.getElementById("message15").style.visibility="visible";
    return false;
  } 
  else{
    document.getElementById("message15").style.visibility="hidden";
  }
}
function padd1Validate()
{
  if( document.studentDetails.pAddress1.value == "" )
  {
    document.getElementById("message16").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message16").style.visibility="hidden";
  }

}
function padd2Validate()
{
  if( document.studentDetails.pAddress2.value == "" )
  {
    document.getElementById("message17").style.visibility="visible";
    return false;
  }  
  else{
    document.getElementById("message17").style.visibility="hidden";
  }

}
function pdistValidate()
{
  if( document.studentDetails.pDistrict.value == "" )
  {
    document.getElementById("message18").style.visibility="visible";
    return false;
  } 
  else{
    document.getElementById("message18").style.visibility="hidden";
  }
}
function pstateValidate()
{
  if( document.studentDetails.state.value == "" )
  {
    document.getElementById("message19").style.visibility="visible";
    return false;
  } 
  else{
    document.getElementById("message19").style.visibility="hidden";
  }
}
function ppinValidate()
{
  if( document.studentDetails.pPinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message20").style.visibility="visible";
    return false;
  }
  else{
    document.getElementById("message20").style.visibility="hidden";
  }
}


function pcountryValidate()
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
// on clicking the check box in the form page the current address values gets copied to the permanent address
function fillAddress(f)
{
  var checkbox = document.getElementById("filladdress");
  localStorage.setItem('filladdress', checkbox.checked);
  if (f.filladdress.checked == true)
  {
    document.getElementById("pAddress1").value = document.getElementById("address1").value;
    document.getElementById("pAddress2").value = document.getElementById("address2").value
    document.getElementById("pDistrict").value = document.getElementById("district").value;
    document.getElementById("pState").value = document.getElementById("state").value;
    document.getElementById("pPinCode").value = document.getElementById("pinCode").value
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
  padd1Validate();
  padd2Validate();
  pdistValidate();
  pstateValidate();
  ppinValidate();
  pcountryValidate();
}
function validate(tableID)
{
  var x = document.getElementById("firstName").value.trim();
  if( x == "" )
  {
    document.getElementById("message1").style.visibility="visible";
  }
  else{
    document.getElementById("message1").style.visibility="hidden";
  }
  if( document.studentDetails.lastName.value.trim() == "" )
  {
    document.getElementById("message2").style.visibility="visible";
  }
  else{
    document.getElementById("message2").style.visibility="hidden";
  }
  if( document.studentDetails.class.value == "" )
  {
    document.getElementById("message3").style.visibility="visible";
  }
  else{
    document.getElementById("message3").style.visibility="hidden";
  }
  //isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  //we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  //if it finds any illegal number then it will show error

  var x = document.getElementById("dob").value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    document.getElementById("message4").style.visibility = "visible";
  }  
  else{
    document.getElementById("message4").style.visibility="hidden";
  }
  if( document.studentDetails.fatherName.value == "" )
  {
    document.getElementById("message6").style.visibility="visible";
  }
  else{
    document.getElementById("message6").style.visibility="hidden";
  }
  if( document.studentDetails.motherName.value == "" )
  {
    document.getElementById("message7").style.visibility="visible";
  }
  else{
    document.getElementById("message7").style.visibility="hidden";
  }
  // here we are checkin the position of the symbol "@" and the symbol "."
  // if the indexof @ is greater than . then it will cast an error
  var emailID = document.getElementById("email").value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
         
  if (atpos < 1 || ( dotpos - atpos < 2 ))
  {
    document.getElementById("message8").style.visibility="visible";
  }
  else{
    document.getElementById("message8").style.visibility="hidden";
  }
	if( document.studentDetails.phoneNumber.value == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    document.getElementById("message9").style.visibility="visible";
  }	
  else{
    document.getElementById("message9").style.visibility="hidden";
  }
  if( document.studentDetails.address1.value == "" )
  {
    document.getElementById("message10").style.visibility="visible";
  }
  else{
    document.getElementById("message10").style.visibility="hidden";
  }
  if( document.studentDetails.address2.value == "" )
  {
    document.getElementById("message11").style.visibility="visible";
  }  
  else{
    document.getElementById("message11").style.visibility="hidden";
  } 
  if( document.studentDetails.district.value == "" )
  {
    document.getElementById("message12").style.visibility="visible";
  } 
  else{
    document.getElementById("message12").style.visibility="hidden";
  }  
  if( document.studentDetails.state.value == "" )
  {
    document.getElementById("message13").style.visibility="visible";
  } 
  else{
    document.getElementById("message13").style.visibility="hidden";
  }  
  if( document.studentDetails.pinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message14").style.visibility="visible";
  }
  else{
    document.getElementById("message14").style.visibility="hidden";
  }
  if( document.studentDetails.country.value == "-1" )
  {
    document.getElementById("message15").style.visibility="visible";
  } 
  else{
    document.getElementById("message15").style.visibility="hidden";
  }
  if( document.studentDetails.pAddress1.value == "" )
  {
    document.getElementById("message16").style.visibility="visible";
  }
  else{
    document.getElementById("message16").style.visibility="hidden";
  }
  if( document.studentDetails.pAddress2.value == "" )
  {
    document.getElementById("message17").style.visibility="visible";  
  }  
  else{
    document.getElementById("message17").style.visibility="hidden";
  }
  if( document.studentDetails.pDistrict.value == "" )
  {
    document.getElementById("message18").style.visibility="visible";  
  } 
  else{
    document.getElementById("message18").style.visibility="hidden";
  }
  if( document.studentDetails.pState.value == "" )
  {
    document.getElementById("message19").style.visibility="visible";
  } 
  else{
    document.getElementById("message19").style.visibility="hidden";
  }
  if( document.studentDetails.pPinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message20").style.visibility="visible";
    
  }
  else{
    document.getElementById("message20").style.visibility="hidden";
  }
  if( document.studentDetails.pCountry.value == "-1" )
  {
    document.getElementById("message21").style.visibility="visible";
  } 
  else{
    document.getElementById("message21").style.visibility="hidden";
    
  }
  var x = document.getElementById("firstName").value.trim();
  if( x == "" )
  {
    document.getElementById("message1").style.visibility="visible";
    document.studentDetails.firstName.focus()
    return false;
    
  }
  else{
    document.getElementById("message1").style.visibility="hidden";
  }
  if( document.studentDetails.lastName.value.trim() == "" )
  {
    document.getElementById("message2").style.visibility="visible";
    document.studentDetails.lastName.focus()
    return false;
  }
  else{
    document.getElementById("message2").style.visibility="hidden";
  }
  if( document.studentDetails.class.value == "" )
  {
    document.getElementById("message3").style.visibility="visible";
    document.studentDetails.class.focus() ;
    return false;
  }
  else{
    document.getElementById("message3").style.visibility="hidden";
  }
  //isNan checks if it is Not-a-number and if it finds illegal number then it returns true
  //we are checkin the index number 0-1 ,3-4 and 6-9 if they contain anything other  than number or not 
  //if it finds any illegal number then it will show error

  var x = document.getElementById("dob").value;
  if(!(isNaN(x.substring(0, 1)) || isNaN(x.substring(3, 4)) || isNaN(x.substring(6, 9))))
  {
    document.getElementById("message4").style.visibility = "visible";
    document.studentDetails.dob.focus();
    return false;
  }  
  else{
    document.getElementById("message4").style.visibility="hidden";
  }
  if( document.studentDetails.fatherName.value == "" )
  {
    document.getElementById("message6").style.visibility="visible";
    document.studentDetails.fatherName.focus() ;
    return false;
  }
  else{
    document.getElementById("message6").style.visibility="hidden";
  }
  if( document.studentDetails.motherName.value == "" )
  {
    document.getElementById("message7").style.visibility="visible";
    document.studentDetails.motherName.focus() ;
    return false;
  }
  else{
    document.getElementById("message7").style.visibility="hidden";
  }
  // here we are checkin the position of the symbol "@" and the symbol "."
  // if the indexof @ is greater than . then it will cast an error
  var emailID = document.getElementById("email").value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
         
  if (atpos < 1 || ( dotpos - atpos < 2 ))
  {
    document.getElementById("message8").style.visibility="visible";
    document.getElementById("email").focus() ;
    return false;
  }
  else{
    document.getElementById("message8").style.visibility="hidden";
  }
	if( document.studentDetails.phoneNumber.value == "" || isNaN( document.studentDetails.phoneNumber.value) || document.studentDetails.phoneNumber.value.length != 10 )
	{
    document.getElementById("message9").style.visibility="visible";
    document.studentDetails.phoneNumber.focus() ;
    return false;
  }	
  else{
    document.getElementById("message9").style.visibility="hidden";
  }
  if( document.studentDetails.address1.value == "" )
  {
    document.getElementById("message10").style.visibility="visible";
    document.studentDetails.address1.focus() ;
    return false;
  }
  else{
    document.getElementById("message10").style.visibility="hidden";
  }
  if( document.studentDetails.address2.value == "" )
  {
    document.getElementById("message11").style.visibility="visible";
    document.studentDetails.address2.focus() ;
    return false;
  }  
  else{
    document.getElementById("message11").style.visibility="hidden";
  } 
  if( document.studentDetails.district.value == "" )
  {
    document.getElementById("message12").style.visibility="visible";
    document.studentDetails.district.focus() ;
    return false;
  } 
  else{
    document.getElementById("message12").style.visibility="hidden";
  }  
  if( document.studentDetails.state.value == "" )
  {
    document.getElementById("message13").style.visibility="visible";
    document.studentDetails.state.focus() ;
    return false;
  } 
  else{
    document.getElementById("message13").style.visibility="hidden";
  }  
  if( document.studentDetails.pinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message14").style.visibility="visible";
    document.studentDetails.pinCode.focus() ;
    return false;
  }
  else{
    document.getElementById("message14").style.visibility="hidden";
  }
  if( document.studentDetails.country.value == "-1" )
  {
    document.getElementById("message15").style.visibility="visible";
    document.studentDetails.country.focus() ;
    return false;
  } 
  else{
    document.getElementById("message15").style.visibility="hidden";
  }
  if( document.studentDetails.pAddress1.value == "" )
  {
    document.getElementById("message16").style.visibility="visible";
    document.studentDetails.pAddress1.focus() ;
    return false;
  }
  else{
    document.getElementById("message16").style.visibility="hidden";
  }
  if( document.studentDetails.pAddress2.value == "" )
  {
    document.getElementById("message17").style.visibility="visible";
    document.studentDetails.pAddress2.focus() ;
    return false;
    
  }  
  else{
    document.getElementById("message17").style.visibility="hidden";
  }
  if( document.studentDetails.pDistrict.value == "" )
  {
    document.getElementById("message18").style.visibility="visible";
    document.studentDetails.pDistrict.focus() ;
    return false;
    
  } 
  else{
    document.getElementById("message18").style.visibility="hidden";
  }
  if( document.studentDetails.state.value == "" )
  {
    document.getElementById("message19").style.visibility="visible";
    document.studentDetails.pState.focus() ;
    return false;
  } 
  else{
    document.getElementById("message19").style.visibility="hidden";
  }
  if( document.studentDetails.pPinCode.value == "" || isNaN( document.studentDetails.pinCode.value) || document.studentDetails.pinCode.value.length != 6 )
  {
    document.getElementById("message20").style.visibility="visible";
    document.studentDetails.pPinCode.focus() ;
    return false;
  }
  else{
    document.getElementById("message20").style.visibility="hidden";
  }
  if( document.studentDetails.pCountry.value == "-1" )
  {
    document.getElementById("message21").style.visibility="visible";
    document.studentDetails.pCountry.focus() ;
    return false;
  } 
  else{
    document.getElementById("message21").style.visibility="hidden";
    
  }
  //this will add the form values in the table
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);
  var cell0 = row.insertCell(0);
  cell0.innerHTML=document.studentDetails.firstName.value;
  var cell1 = row.insertCell(1);
  cell1.innerHTML=document.studentDetails.firstName.value;
  var cell2 = row.insertCell(2);
  cell2.innerHTML=document.studentDetails.lastName.value;
  var cell3 = row.insertCell(3);
  cell3.innerHTML=document.studentDetails.fatherName.value;
  var cell4 = row.insertCell(4);
  cell4.innerHTML=document.studentDetails.motherName.value;
  var cell5 = row.insertCell(5);
  cell5.innerHTML=document.studentDetails.class.value;
  var cell6 = row.insertCell(6);
  cell6.innerHTML=document.studentDetails.email.value;
  var cell7 = row.insertCell(7);
  cell7.innerHTML=document.studentDetails.phoneNumber.value;
  var cell8 = row.insertCell(8); cell8.innerHTML = '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">'
  var cell9 = row.insertCell(9); cell9.innerHTML = '<input type="button" value = "Edit" onClick="Javacsript:editRow(this)">'
  
  






  document.getElementById("myForm").reset();
  return false;
}

//this function adds a new row to the table from the form 
function addRow() {
  var fName = document.getElementById("firstName");
  var lName = document.getElementById("lastName");
  var father = document.getElementById("fatherName");
  var mother = document.getElementById("motherName");
  var clas = document.getElementById("class");
  var mail = document.getElementById("email");
  var no = document.getElementById("phoneNumber");

  var table = document.getElementById("myTable");

}
function editRow(obj)
{
  document.getElementById("firstName").value = getSavedValue("firstName");
  document.getElementById("lastName").value = getSavedValue("lastName");
  document.getElementById("class").value = getSavedValue("class");
  document.getElementById("dob").value = getSavedValue("dob");
  document.getElementById("fatherName").value = getSavedValue("fatherName");
  document.getElementById("motherName").value = getSavedValue("motherName");
  document.getElementById("email").value = getSavedValue("email");
  document.getElementById("phoneNumber").value = getSavedValue("phoneNumber");
  document.getElementById("altMail").value = getSavedValue("altMail");
  document.getElementById("altPhoneNumber").value = getSavedValue("altPhoneNumber");
  document.getElementById("address1").value = getSavedValue("address1");
  document.getElementById("address2").value = getSavedValue("address2");
  document.getElementById("district").value = getSavedValue("district");
  document.getElementById("state").value = getSavedValue("state");
  document.getElementById("pinCode").value = getSavedValue("pinCode");
  if (localStorage.getItem('country')) {
    document.getElementById("country").options[localStorage.getItem('country')].selected = true;
  }
  if (localStorage.getItem('pCountry')) {
    document.getElementById("pCountry").options[localStorage.getItem('pCountry')].selected = true;
  }
 
  
  document.getElementById("pAddress1").value = getSavedValue("pAddress1");
  document.getElementById("pAddress2").value = getSavedValue("pAddress2");
  document.getElementById("pDistrict").value = getSavedValue("pDistrict");
  document.getElementById("pState").value = getSavedValue("pState");
  document.getElementById("pPinCode").value = getSavedValue("pPinCode");
  //document.getElementById("country").options[localStorage.getItem(country)].selected = true;
  //document.getElementById("pCountry").options[localStorage.getItem(pCountry)].selected = true;
  var index = obj.parentNode.parentNode.rowIndex;
  var table = document.getElementById("myTable");
  table.deleteRow(index);
  if (localStorage.getItem('filladdress').checked=true) {
    document.getElementById("pAddress1").value = document.getElementById("address1").value;
    document.getElementById("pAddress2").value = document.getElementById("address2").value;
    document.getElementById("pDistrict").value = document.getElementById("district").value;
    document.getElementById("pState").value = document.getElementById("state").value;
    document.getElementById("pPinCode").value = document.getElementById("pinCode").value;
  }
}


function deleteRow(obj) {
    
  var index = obj.parentNode.parentNode.rowIndex;
  var table = document.getElementById("myTable");
  table.deleteRow(index);
}
function saveValue(e)
{
  var id = e.id;  // get the sender's id to save it . 
  var val = e.value; // get the value. 
  localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
}
function getSavedValue  (v){
  if (!localStorage.getItem(v)) {
      return "";// You can change this to your defualt value. 
  }
  return localStorage.getItem(v);
}