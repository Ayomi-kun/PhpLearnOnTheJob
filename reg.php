<?php 
// exit(var_dump($_POST));
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

    $username1 = htmlspecialchars($_POST['username']);
    $password1 = md5($_POST['password']);
    // exit($username1);
    $sql = "INSERT INTO users (username, password) Values ('$username1','$password1')";

    if($conn->query($sql) === TRUE) {
        //echo "New Record Created Succesfully";
        //print '<script>alert("Succesfully Registered");</script>';//prompts the user
        //print '<script>window.location.assign("register.php");</script>'; //redirects to register.php
        $res = json_encode(array("status"=>1,"message"=>"Succesfully Registered"));
    }
    else{
       // echo "Error:  $sql  <br>  $conn->error";
       // print `<script>alert("Registration Not successful");</script>`; //prompt the user
      // header('location: register.php');
      $res = json_encode(array("status"=>0,"message"=>" Registration not Successful"));
    }

    exit($res);
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