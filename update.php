<?php

 include 'db.php' ;

 session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $id=$_POST['id'];
    $size=$_POST['size'];
   
     $sql="UPDATE cartitems SET size='$size' where product_id=$id";
 

    if(mysqli_query($con,$sql)){
        
        
       }
        else{
        printf("error: %s\n", mysqli_error($con));
       }
    
  }
  mysqli_close($con);
?>