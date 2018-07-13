<?php
if(isset($_POST['submit'])){
    session_start();
    
    //connect to database
    include_once "db_config.php";
    
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
    
    $sql = "Select * from users WHERE username='".$username."' AND password='".$password."'"; // query the user table
    $result = $conn->query($sql);
    
    if($result->num_rows > 0 ){
        $_SESSION['user'] = $username;
        header("location: index.php");
        
    }
    else{
        print'<script> alert("Incorrect Username or Password!");</script>';
        print'<script> window.location="login.php"; </script>';
        // header("location: login.php");
    }
}
    
?>