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
       
        
        
      include_once "db_config.php";
        $decision = "no";
        //foreach($_POST["public"] in $each_check){
             if(isset($_POST["public"])){
                $decision = "yes";
            }
            
        
     
        $sql = "INSERT INTO  list (details, public) Values ('$details','$decision')";
        $conn->query($sql);

       if(count($conn->error_list) >0){
        print'<script>alert("Sorry, an error occured");</script>';
       }else{
        print'<script>alert("Succesfully Saved");</script>';
       }
      print "
       <script>window.location = 'index.php'</script>
      ";
        // exit(var_dump($conn));
    
    }

   
}

?>