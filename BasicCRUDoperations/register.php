<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Not my first php website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
    <h2> Registration Page </h2>
    <a href="index.php"> Click here to go back </a> <br /> <br />
    <form class="registerform" action="reg.php" method="POST"> 
    <!-- different forms can have the same class name, but id is unique to a form -->
        <label> Enter Username: </label>
        <input type="text" name="username" required="required" />
        <br />
        <label> Enter Password: </label>
        <input type="password" name="password" required="required" />
        <br />
        <input type="submit" name="submit" value="Register" />
    </form>

<script>
    $('.registerform').submit(function(e){
        e.preventDefault(); //this prvents the form from doing the normal thing i.e submitting to reg.php
        var formdata = new FormData(this); //creating an associative array for the data in the form including the name
        formdata.append('submit',1);
        $.ajax({
            type: 'POST',
            url: 'reg.php',
            data: formdata,
            cache:false,
            processData:false,
            contentType:false,
            success: function(data){
                alert(data)
                window.location = "login.php";
            },
            error:function(xhr){
                alert('error')
            }
        })
    })
</script>
</body>
</html>
 