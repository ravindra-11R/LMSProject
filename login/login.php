
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Project</title>
</head>
<body>
    <h2>Login Page</h2>
   <!--<a href="index.php"><br/><br/>-->
    <form action="loginHandler.php" method="POST" action = "">
    Email:<input type="text" name="email" required="required"/><br/>
    Password:<input type="password" name="password" required="required"><br/>
        <input type="submit" value="Login"/>

 

    </form>
</body>
</html>

<?php
   /* $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";

    }*/

    
?>
