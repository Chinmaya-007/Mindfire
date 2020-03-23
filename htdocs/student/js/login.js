$(document).ready(function(){
    $("#login").click(function(){
        var $email= $('#email').val();
        var $password= $('#password').val();

        var $data={email:$email,password:$password};
        console.log($data);

        $.ajax({
            url: "http://slimapp/api/login",
            type: "POST",
            data: JSON.stringify($data),
            dataType: "json",
            success: function(response) {
               //window.location.href = "profile.php";
               //var $mystatus=response.status;

               console.log(response);
            },
            contentType: "application/json"
    });
    });
})
