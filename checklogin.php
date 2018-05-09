<?php 
    if(isset($_POST['submit'])){
        $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "first_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }

    $username1 =htmlentities($_POST['username']);
    $password1 = md5($_POST['password']);

    $sql = "INSERT INTO users (username, password) Values (`$username1`,`$password1`)";

    if($conn->query($sql) === TRUE) {
        echo "New Record Created Succesfully";
        print '<script>alert("Succesfully Registered");</script>';//prompts the user
        print '<script>window.location.assign("register.php");</script>'; //redirects to register.php
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->Close();
    }
    
    ?>

   <?php  
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $username = mysql_real_escape_string($_POST['username']);
    // $password = mysql_real_escape_string($_Post['password']);

    // echo "username entered is = ".$username. "<br />";
    // echo "password entered is = ".$password. "<br />";
//   }
?>