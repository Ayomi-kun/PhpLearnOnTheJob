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
        <input type="submit" name="submit" value="Register" />
    </form>

</body>
</html>
