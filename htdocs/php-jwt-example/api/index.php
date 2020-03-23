<?php
$error="";
?>
<html>
	<head>
		<title>Student details</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="login.css">
		
	</head>
	
    <body>

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <!-- Icon -->
                <div class="fadeIn first">
                    <br>
                    <img src="img/user.png" id="icon" class="profile-img-card" alt="User Icon" style="width:100px;height:100px;" />
                    <br>
                </div>
                <!-- Login Form -->
                <form method="post" action="validate.php">
                    <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                    <span><?php echo $error; ?></span>
                </form>
                <!-- sign up  -->
                <div id="formFooter">
                <a class="underlineHover" href="registration.php">Create an account?</a>
                </div>

            </div>
        </div>
    </body>
</html>