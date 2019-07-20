<?php

 include 'db.php' ;

 session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $id=$_POST['id'];
    
     $sql="DELETE FROM cartitems where product_id=$id  ";
 

    if(mysqli_query($con,$sql)){
        echo 'DELETED SUCCESFULLY';
        
       }
        else{
        printf("error: %s\n", mysqli_error($con));
       }
    
  }
  mysqli_close($con);
?>