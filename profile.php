
<?php
  session_start();
  $_SESSION["items"]=0;
 
 $im=false; 
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  $im=true;
  $id1=$_SESSION['id'];
}
?>
<!DOCTYPE html>
<html>
  <head>
          
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="myf.css?ts=<?=time()?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="jquery-3.3.1.min.js"></script>
      <script src="myjs.js?ts=<?=time()?>"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
</head>
<body >
        <div class="fluid-container"> 
                         <!-- header-->
                         <?php
                        include 'header.php';
                        ?>
                         <!-- header exit-->
                         <div class="fluid-container" style="background-color:#6f6f6f;height:2px;z-index: 999;position: fixed;width:100%;top:72px">
                               
                         </div>
                         <div class="sidebar">
                             
                             
                                        <a href="shop.php" style=" font-family:Comic Sans MS, cursive, sans-serif;position:absolute;top:50px;left:50px;font-size:25px;color:white;">Home</a>
                                        <a href="store.php" style=" font-family:Comic Sans MS, cursive, sans-serif;position:absolute; top:100px;left:50px;font-size:25px;color:white;">Men</a>
                                        <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;position: absolute;top:150px;left:50px;font-size:25px;color:white;">Women</a>
                                        <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;position: absolute;top:200px;left:50px;font-size:25px;color:white;">Kids</a>
                                        <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;position:absolute;top:250px;left:50px;font-size:25px;color:white;">Home&Living</a>
                              
                 
                         </div>

          
                
                <div class="header2in">
                        <strong><a href="shop.php" style=" font-family:Comic Sans MS, cursive, sans-serif;margin-left:45px;font-size:25px;color:white;">Home</a>
                                <a href="store.php" style=" font-family:Comic Sans MS, cursive, sans-serif;margin-left:45px;font-size:25px;color:white;">Men</a>
                                <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;margin-left:45px;font-size:25px;color:white;">Women</a>
                                <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;margin-left:45px;font-size:25px;color:white;">Kids</a>
                                <a href="#" style=" font-family:Comic Sans MS, cursive, sans-serif;margin-left:45px;font-size:25px;color:white;">Home&Living</a>
                       
                       
                       
                        </strong> 
                </div>
                <div class="container" style="position:relative;top:140px;">
                     <div class="row" >
                         <div class="col-md-3" style="background:black;height:100px;">
                           
                         </div>
                         <div class="col-md-9 im" >
                                <div >
                                   <p style="padding:20px 30px;font-size:20px"><b>Primary Information</b></p>
                                </div>
                                <div>
                                    <?php
                                    include 'db.php';
                                    $sql="SELECT * FROM users WHERE id=$id1 ";

                                    $result = mysqli_query($con, $sql);
                             if($result)
                             {
                                    if (mysqli_num_rows($result) > 0) 
                                    {
                                      while($row = mysqli_fetch_assoc($result)) 
                                      {
                                                                             echo '
                                    <div class="pro">
                                       <div class="pro1">
                                            First Name
                                       </div>
                                       <div class="pro2">
                                          '.$row['first_name'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                            Last Name
                                       </div>
                                       <div class="pro2">
                                       '.$row['last_name'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                            Gender
                                       </div>
                                       <div class="pro2">
                                       '.$row['gender'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                            D.O.B
                                       </div>
                                       <div class="pro2">
                                       '.$row['dob'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                            Email
                                       </div>
                                       <div class="pro2">
                                       '.$row['email'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                            Mobile No.
                                       </div>
                                       <div class="pro2">
                                       '.$row['mobile'].'
                                       </div>
                                    </div>
                                    
                                    <div class="pro">
                                       <div class="pro1">
                                         location
                                       </div>
                                       <div class="pro2">
                                       '.$row['location'].'
                                       </div>
                                    </div>

                                    <div class="pro">
                                       <div class="pro1">
                                            Bio
                                       </div>
                                       <div class="pro2">
                                       '.$row['bio'].'
                                       </div>
                                    </div>';
                                }
                                
                                }
                            }
                            else
                            {
                                printf("error: %s\n", mysqli_error($con));
                            }
                                
                                        ?>
                                       
<div class="pro1">
<button class="btn btn-default" onclick="window.location.href='pedit.php'" style="width:150px">Edit</button>
         
</div>
                                    </div>
                         </div>
                     </div>
                </div>
                
           

        </div>
        <script>
        
  if("<?php echo $im ?>")
  {
     $('.hehe').hover(function(){
         $('.logged').css('display','block');
     },function(){
         $('.logged').css('display','none');
     });
  }
  else
  {

    $('.hehe').hover(function(){
         $('.cart-dropdown').css('display','block');
     },function(){
         $('.cart-dropdown').css('display','none');
     });
  }
    
        </script>
</body>
</html>