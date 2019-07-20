
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
                          
                           <?php 
                                include "db.php";
                                $sql="SELECT * FROM users WHERE id=$id1 ";
                                $result = mysqli_query($con, $sql);
                                if($result)
                                {
                                   $row = mysqli_fetch_assoc($result);
                                  
                                   echo ' 
                                 
                          
                               <div >

                                   <p style="margin-left:13px;font-size:20px"><b>Account Details</b></p>
                                   <div class="col-md-6" style="height:70px;">
                                   <label>Email </label>*
                                   <input type="text" value="'.$row["email"].'" readonly style="background:#f7f7f7;WIDTH:350PX">
                                  
                                   </div>
                                   <div class="col-md-6" style="height:70px;">
                                   <div style="white-space:nowrap"> 
                                     <label>Password *</label> 
                                    <a onclick="pc()" class="pointer">ChangePassword</a> 
                                    </div>
                                      <input type="text" value="......." readonly style="background:#f7f7f7;WIDTH:350PX">
                                    
                                  <form action="preupd.php" method="post">  
                                <div class="chgpass fadel col-md-12"  style="width:350px;height:250px">
                                <button type="button" class="close" onclick="closeSize()">&times;</button> 
                                  <label class="col-md-12"> Old Password*</label>
                                    <div class="col-md-12" style="height:40px;">
      
                                    <input type="text" placeholder="Current Password" name="cp" style="WIDTH:250PX">
                    
                                    </div>  
                                    <label class="col-md-12">New Password*</label>
                                    <div class="col-md-12" style="height:40px;">
      
                                    <input type="text" placeholder="New Password" name="np" style="WIDTH:250PX">
                    
                                    </div>  
                                    <label class="col-md-12">Confirm New Passwod*</label>
                                    <div class="col-md-12" style="height:40px;">
      
                                    <input type="text" placeholder="Confirm New Password" name="cnp" style="WIDTH:250PX">
                    
                                    </div> 
                                    <button class="btn btn-default" style="width:150px;margin-left:20px" value="Submit">Change Password</button> 
                                    </div>
                                    </form>
                                   </div>
                                
                                   
                                </div>
                              
                                <div>
                              <form action="proupd.php" method="post">
                              <label class="col-md-12"> First Name </label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["first_name"].'" name="fname" style="WIDTH:350PX">
              
                              </div>  
                              <label class="col-md-12"> Last Name </label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["last_name"].'" name="lname" style="WIDTH:350PX">
              
                              </div>  
                              <label class="col-md-12"> Mobile No.</label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["mobile"].'" name="mobile" style="WIDTH:350PX">
              
                              </div>  
                              <label class="col-md-12">D.O.B</label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["dob"].'" name="dob" style="WIDTH:350PX">
              
                              </div>  
                              <label class="col-md-12"> Gender</label>
                              <div class="col-md-12" style="height:40px;">
                              
                              <input type="radio" name="gender"  >Male
                           
                              <input type="radio" name="gender">Female
                            
                              </div>  
                              <label class="col-md-12">Location</label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["location"].'" name="location" style="WIDTH:350PX">
              
                              </div>  
                              <label class="col-md-12">Bio</label>
                              <div class="col-md-12" style="height:40px;">

                              <input type="text" value="'.$row["bio"].'" name="bio" style="WIDTH:350PX">
              
                              </div>  
                                    
                              
                                     
                                
                                                                
<div class="col-md-6">
<button class="btn btn-default" style="width:150px" value="Submit">Save</button>
<button class="btn btn-default"  style="width:150px">Cancel</button>      
</div>
                                 

                                            
                                    
                                
</form>

      
                                    </div>
                         </div>
                        ';}
                         ?>
                     </div>
                </div>
                
           

        </div>
        <script>
        var imdb= $('.chgpass');
    function closeSize()
    {  
        $('.chgpass').css('display','none');
      

    }
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
    function pc()
    {
      
        $('.chgpass').css('display','block');
    }
    
    
        </script>
</body>
</html>