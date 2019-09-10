<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    echo "Connected successfully";

   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $sql = "INSERT INTO user ( name, email, address, contact, password, confirm_password) VALUES ( '$name', '$email', '$address', '$contact', '$password', '$confirm_password')";

    if ($conn->query($sql) === TRUE){
        echo "New record created successfully";

        // it redirect to login page
        $loc = '../login/login.php';
        header("Location: $loc");
        die(0);
    }
     else {
        echo "Error: " .$sql ."<br>" . $conn->error;
    }

    $conn->close();

   
    
?>

