$(document).ready(function(){
    $("#login").click(function(){
        var email= $('#email');
        var password= $('#password');
        

        var data={'email':email.val(),'password':password.val()};
        //console.log($data);

        $.ajax({
            url: "http://slimapp/api/login",
            type: "POST",
            data: data,
            dataType: 'JSON',
            success: function(response,status,xhr) {
                if (response.status==true) {
                    console.log(response.val);
                    // localStorage.setItem('val', response.val);
                    localStorage["id"] = JSON.stringify(response.val);
                    localStorage.setItem('token', response.token);
                    window.location.href = "listuser";
                  }else if (response.status==false){
                    document.getElementById("message").innerHTML="Invalid Log In";
                    console.log("falseiii");
                  }
                },
                  error: function (xhr, status, error) {
                    email.html("Something went wrong!");
                    //console.log("false");
               
               //var $mystatus=response.status;

               
            }
            
    });
    });
})
