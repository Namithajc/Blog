<?php
  include('config.php');


   
    $content = $_POST['user_name'];
    $username=$_SESSION['user']['username'];


    $insert="INSERT into story (username,body,time_at) VALUES ('$username','$content',NOW())";

   $result = mysqli_query($conn,$insert);

   if ($result)
   {
    header('location:./index.php');
   }
   else
   {
       echo"Login Failed";
   }
?>