<html>
<head>
    <title>Welcome page!</title>
    <link rel="shortcut icon" href="picture/mikagn.ico" type="image/x-icon">
    <link rel="stylesheet" href="../content/css/bootstrap.min.css"/>
    <!-- icon in the header -->
    <style>
        #welcome{
            text-align: right;
        }
    </style>
</head>
<?php
include_once "db_config.php";
session_start(); //starts the session.
if($_SESSION['user']){ // checks if the user is logged in
    $user = $_SESSION['user'];
}
else{
    header("location: signin.php"); // redirects if the user is not logged in
}

// $_SESSION['users']; // assigned username from checklogin


?> 
<body class="container-fluid">
    <h2 class="text-center">HOME PAGE </h2>
    <h4 id="welcome">Welcome <?php print $user; ?> </h4>
    <br />
    <br />

    <a href="logout.php"> Click here to logout</a><br /><br />
    <form action="add.php" method="POST">
    <label>Add more to the list:</label> <input type="text" name="details" /><br />
    <label>Public post? </label> <input type="checkbox" name="public" value="yes" />  <br />
    <input type="submit" name="submit" value="Add to list" />
    </form>
    <h2 align="center">My List</h2>
    <Table class="table" align="center" style="border:1px solid black;" rules="all" cellspacing="50">
    <thead class="thead-dark"> 
        <tr>
        <th> ID </th>
        <th> Details </th>
        <th> Date Posted </th>
        <th> Time Edited </th>
        <th> Date Edited </th>
        <th> Time Edited</th>
        <th> Public Post </th>
        <th> Edit / Delete </th>

        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "Select * from list"; // query the list table
        $result = $conn->query($sql);
        
        if($result->num_rows > 0 ){
            while($row= $result->fetch_assoc()){
                $date = date('d M, Y',strtotime($row['date_time']));

                $time = date('h:i A',strtotime($row['date_time']));

                $dateedited = date('d M, Y',strtotime($row['date_time_edited']));
                $timeedited = date('h:i A',strtotime($row['date_time_edited']));
                
                ?>
                <tr>
                    <th> <?php echo $row['id'] ?> </th>
                    <td> <?php echo $row['details'] ?> </td>
                    <td> <?php echo $date ?> </td>
                    <td> <?php echo $time ?>  </td>
                    <td> <?php echo $dateedited ?>  </td>
                    <td> <?php echo $timeedited ?>  </td>
                    <td> <?php echo $row['public'] ?>  </td>
                    <td> <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal"> Edit / Delete </button> </td>
                </tr>
           <?php  }            
        }
    ?>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModelLabel" aria-hidden="true">
    <div class="model-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;<span>
                </button>
            </div>

            <div class="modal-body">

            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close </button>
            <button type="button" class="btn btn-primary"> Save CHanges </button>
            </div>

        </div>
    </div>
</div>


</tbody>
</Table>


<script src="../content/js/bootstrap.min.js"></script>
</body>
</html>