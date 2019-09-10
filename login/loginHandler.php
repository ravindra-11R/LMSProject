<?php
/* session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="project";
*/
  /*  // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected successfully";
    */

    $message="";
    if(count($_POST)>0) {
        $conn = mysqli_connect("localhost","root","","project");
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $count = mysqli_num_rows($result);
        if($count==0) {
            $message = "Tnvalid email or password!";

        } else {
            $message = "You are successfully authenticated!";

        }
    }

    //select query of email and password from user table
   /* $sql = "SELECT email, password FROM user";
    $result = $conn->query($sql);// run the sql query

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            $email = $row["email"];
            $password = $row["password"];

            echo "$email";
            echo "$password";

        }

    } else{
        echo "Data not found!";

    }
    */

    /*if (isset($_POST['Login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        check($email, $password);

    }

      function check($email, $password){

        $check = "SELECT * FROM user WHERE email='$email'";
        $check_q = mysql_query($check) or die("<div class='loginmsg'>Error on checking email<div>");

        if (mysql_num_rows($check_q) == 1){
            checklogin($email, $password);
        }
        else{
            echo "div id='loginmsg'>Wrong email</div>";

        }
      }  


      function checklogin($email, $password){

        $login = "SELECT * FROM user WHERE email='$email' and password='$password'";
        $login_q = mysql_query(login) or die('Error on checking email and password');

        if (mysql_num_rows($login_q) == 1){
            echo "<div id='login'> Logged in as $email </div>";
            $_SESSION['email'] = $email;
            header('location: register.php');
        }
        else{
            echo "<div id='login'>Wrong password</div>";

        }
      }  
      
        $conn->close();
    */
?>