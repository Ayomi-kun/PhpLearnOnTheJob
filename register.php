<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Not my first php website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2> Registration Page </h2>
    <a href="index.php"> Click here to go back </a> <br /> <br />
    <form action="checklogin.php" method="POST">
        <label> Enter Username: </label>
        <input type="text" name="username" required="required" />
        <br />
        <label> Enter Password: </label>
        <input type="text" name="password" required="required" />
        <br />
        <input type="submit" value="Register" />
    </form>

</body>
</html>
<?php 
    $servername = "localhost";
    $username = "username";
    $password = "password";
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

    if($conn->query(sql) === TRUE) {
        echo "New Record Created Succesfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->Close();
    ?>

    
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $username = mysql_real_escape_string($_POST['username']);
    // $password = mysql_real_escape_string($_Post['password']);

    // echo "username entered is = ".$username. "<br />";
    // echo "password entered is = ".$password. "<br />";
//   }
