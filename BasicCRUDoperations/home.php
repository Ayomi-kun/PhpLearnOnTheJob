<html>
<head>
    <title>Welcome page!</title>
    <link rel="shortcut icon" href="picture/mikagn.ico" type="image/x-icon">
    <!-- icon in the header -->
</head>
<?php
session_start(); //starts the session.
if($_SESSION['user']){ // checks if the user is logged in
    $user = $_SESSION['user'];
}
else{
    header("location: index.php"); // redirects if the user is not logged in
}

// $_SESSION['users']; // assigned username from checklogin


?> 
<body>
    <h2>HOME PAGE </h2>
    <h3>Welcome <?php print $user; ?> </h3>
    <br />
    <br />

    <a href="logout.php"> Click here to logout</a><br /><br />
    <form action="add.php" method="POST">
    <label>Add more to the list:</label> <input type="text" name="details" /><br />
    <label>Public post? </label> <input type="checkbox" name="public" value="yes" />  <br />
    <input type="submit" name="submit" value="Add to list" />
    </form>
    <h2 align="center">My List</h2>
    <Table align="center" style="border:1px solid black;" rules="all" cellspacing="50">
    <thead> 
        <tr>
        <th> ID </th>
        <th> Details </th>
        <th> Date Posted </th>
        <th> Date Edited </th>
        <th> Edit </th>
        <th> Delete </th>
        <th> Public Post </th>

        </tr>
    </thead>
    <tbody>
    <tr>
        <td> ID </td>
        <td> Details </td>
        <td> Date Posted kdiopjg[sigsodnfusdfi</td>
        <td> Date Edited </td>
        <td> Edit </td>
        <td> Deleteoushgdisidgojsgoih </td>
        <td> Public Post </td>
    </tr>
</tbody>
    </Table>


</body>
</html>