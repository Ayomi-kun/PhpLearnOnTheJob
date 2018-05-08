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

    $username1 = $_POST['username'];
    $password1 = $_POST['password'];

    $sql = "INSERT INTO users (username, password) Values ('$username1','$password1')";

    if($conn->query($sql) === TRUE) {
        echo "New Record Created Succesfully";
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