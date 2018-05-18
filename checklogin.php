<?php
if(isset($_POST['submit'])){
    session_start();
    
    //connect to database
    $conn = new mysqli("localhost", "root", "", "first_db"); // sql connection using mysqli extention
   
    $bool = true;

    if ($conn -> connect_error){
        die("connection failed:".$conn->connect_error);

    }
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
    
    $sql = "Select * from users WHERE username='".$username."' AND password='".$password."'"; // query the user table
    $result = $conn->query($sql);
    
    if($result->num_rows > 0 ){
        header("location: welcome.php");
        
    }
    else{
        print'<script> alert("Incorrect Username or Password!");</script>';
        header("location: login.php");
    }
}
    
?>