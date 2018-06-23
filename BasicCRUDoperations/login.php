<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Not my first php website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="../content/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../content/css/floatinglabel.css">
    
</head>
<body>
<form class="form-signin" action="checklogin.php" method="POST">
      <div class="text-center mb-4">
    <h2> Login Page </h2>
    </div>

    <a href="signin.php"> Click here to go back </a> <br /> <br />

    <form class="form-signin" action="checklogin.php" method="POST">

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="user1" required autofocus>
        <br />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="******" required >
        <br />
    </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>

    </form>

<script src="../content/js/jquery-3.3.1.min.js"></script>
<script src="../content/js/bootstrap.min.js"></script>
</body>
</html>