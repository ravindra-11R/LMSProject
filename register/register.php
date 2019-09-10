
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>First Project</title>
    </head>
        <body>
            <h2>Register librian</h2>
                <!--<a href="index.php"><br/><br/>-->

            <form action="registerHandler.php" method="POST">
            Enter Name: <input type="text" name="name" required="required"/><br/>
            Enter Email: <input type="text" name="email" required="required"><br/>
            Enter Address :<input type="text" name="address" required="required"><br/>
            Enter Contact :<input type="text" name="contact" required="required"><br/>
            Enter Password: <input type="password" name="password" required="required"><br/>
            Enter Confirm_Password: <input type="password" name="confirm_password" required="required"><br/>

            <input type="submit" value="Register"/>
            </form>

        </body>

</html>

<?php
    require_once "config.php";
   
?>