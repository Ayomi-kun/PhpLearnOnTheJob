<?php
session_start();
if($_SESSION['user']){

}
else{
    header('location:index.php');
}

//exit(var_dump($_POST)); // debugging to see all the details that gets sent with the previous page sumit
if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $details = $_POST['details'];
        $time = strftime("%X"); //time
        $date = strftime("%B %d, %Y"); //date
        
        
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
        $decision = "no";
        //foreach($_POST["public"] in $each_check){
             if(isset($_POST["public"])){
                $decision = "yes";
            }
            
        
     
        $sql = "INSERT INTO  list (details, date_posted, time_posted, public) Values ('$details','$date','$time','$decision')";
        $conn->query($sql);

       if(count($conn->error_list) >0){
        print'<script>alert("Sorry, an error occured");</script>';
       }else{
        print'<script>alert("Succesfully Saved");</script>';
       }
      print "
       <script>window.location = 'home.php'</script>
      ";
        // exit(var_dump($conn));
    
    }

   
}

?>