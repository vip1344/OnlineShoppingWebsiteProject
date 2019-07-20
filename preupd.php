<?php

 include 'db.php' ;

 session_start();
 $im=false; 
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  $im=true;
  $id1=$_SESSION['id'];
}
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $sql="UPDATE users SET password='".$_POST['cnp']."'  WHERE id='".$id1."'";
     
     
 

    if(mysqli_query($con,$sql)){
      header("location: profile.php");
        
       }
        else{
        printf("error: %s\n", mysqli_error($con));
       }
    
  }
  mysqli_close($con);
?>