<?php
    session_start();
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
    $bool = true;

    mysql_connect("localhost", "root", "") or die(mysql_error()); // connect to server
    mysql_select_db("first_db") or die ("cannot connect to database"); //connect to database

    $query = mysql_query("Select * from users WHERE username='$username'"); //Query the user table

    $exists = mysql_num_rows($query); //checks if username exists
    $table_users = "";
    $table_password = "";

    if($exists > 0)  {
        while($row = mysql_fetch_assoc($query)){
            $table_users = $row['username'];    
            $table_password = $row['password'];
        }
        if($username == $table_users){
            if($password == $table_password){
                $_SESSION['user'] = $username; // sets the username in a session. This serves as a global variable
                header("loaction : home.php"); // redirects the user to the authenticated home page 

            }
        }
        else{
            print '<script>alert("Incorrect Password!");</script>';
            header("loaction : login.php");
        }
    }
    else{
        print'<script> alert("Incorrect Username or Password!");</script>';
        header("location: login.php");
    }
?>