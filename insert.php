<?php

 include 'db.php' ;

 session_start();
 
  if($_SERVER["REQUEST_METHOD"] == "POST")
  { $size=($_POST['size']);
    $id=$_POST['id'];
   
     $sql="SELECT * FROM products_ where product_id=$id";
    $run_query= mysqli_query($con,$sql);
 
        $row = mysqli_fetch_array($run_query);
      $sql="INSERT INTO `cartitems` (user_id,Brand,title,`image`,price,color,size,quantity) VALUES(1,'$row[Brand]','$row[title]','$row[image]','$row[price]','$row[color]','$size',1)";
     

    if(mysqli_query($con,$sql)){
        echo '<script>alert("RESGISTERED SUCCESFULLY")</script>';
    
       } else{
        printf("error: %s\n", mysqli_error($con));
       }
    
  }
  mysqli_close($con);
?>