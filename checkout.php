
<?php
  session_start();
  $_SESSION["items"]=0;
  
 $im=false; 
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  $im=true;
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
                             
                             
                              
                         <a href="shop.php" style=" font-family:Simplifica;text-decoration:none;position:absolute;top:50px;left:50px;font-size:25px;color:white;">Home</a>
                                        <a href="store.php" style=" font-family:Simplifica;text-decoration:none;position:absolute; top:100px;left:50px;font-size:25px;color:white;">Men</a>
                                        <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;position: absolute;top:150px;left:50px;font-size:25px;color:white;">Women</a>
                                        <a href="store2.php" style=" font-family:Simplifica;text-decoration:none;position: absolute;top:200px;left:50px;font-size:25px;color:white;">Kids</a>
                                        <a href="store3.php" style=" font-family:Simplifica;text-decoration:none;position:absolute;top:250px;left:50px;font-size:25px;color:white;">Home&Living</a>
                              
                 
                         </div>

          
                
                <div class="header2in">
                <strong><a href="shop.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Home</a>
                                <a href="store.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Men</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Women</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Kids</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Home&Living</a>
                       
                       
                       
                        </strong> 
                </div>
                <?php 

                  include 'db.php';
                  if($im)
                  {
                 echo ' 
                <div class="container" style="position:relative;top:140px" >
                                
                        <div>
                          ';
                              
                              $sql="SELECT * FROM cartitems";
                           $result = mysqli_query($con, $sql);
                           $num=mysqli_num_rows($result);
                             echo          '<h3><b>My Shopping Bag('.$num.' Items)</b></h3> 
                     
                     
                                </div>  
                        
                        <div class="row">
                                    <div class="col-md-9">';
                                        
                                          
                                          $sql="SELECT * FROM cartitems";
                               $result = mysqli_query($con, $sql);
                               if (mysqli_num_rows($result) > 0) 
                               { 
                                 while($row = mysqli_fetch_assoc($result)) 
                                 { echo ' <div class="ite">
                                        <img src="prdt/'.$row['image'].'" alt="" height="160" width="120">
                                             <div class="cart-check">
                                               <div style="padding:5px;">
                       
                                                       <p><b>'.$row['Brand'].' </b>
                                                               <b>'.$row['title'].'</b>
                                                       </p>
                                                       <p style="text-align:right;"><b>Rs '.$row['quantity']*$row['price'].'</b></p>
                                                       
                                               </div>
                                               <div class="pointer">    
                                                  <div class="dropdown">
                                                  Size:
                                                  <a class="dropdown-toggle" data-toggle="dropdown">'.$row['size'].'<span class="caret"></span></a>
                                                  <ul class="dropdown-menu pointer">
                                                  <li><a onclick="update('.$row['product_id'].',1)">S</a></li>
                                                  <li><a onclick="update('.$row['product_id'].',2)">M</a></li>
                                                  <li><a onclick="update('.$row['product_id'].',3)">L</a></li>
                                                  <li><a onclick="update('.$row['product_id'].',4)">XL</a></li>
                                                  <li><a onclick="update('.$row['product_id'].',5)">XXL</a></li>
                                                  
                                                         </ul>
                                                  
                                                  </div>
                                                  <div class="dropdown" style="position:relative;left:100px;bottom:20px;">
                                                  Quantity:
                                                  <a class="dropdown-toggle" data-toggle="dropdown">'.$row['quantity'].'<span class="caret"></span></a>
                                                  <ul class="dropdown-menu pointer">
                                                  <li><a onclick="upda('.$row['product_id'].',1)">1</a></li>
                                                  <li><a onclick="upda('.$row['product_id'].',2)">2</a></li>
                                                  <li><a onclick="upda('.$row['product_id'].',3)">3</a></li>
                                                  <li><a onclick="upda('.$row['product_id'].',4)">4</a></li>
                                                  <li><a onclick="upda('.$row['product_id'].',5)">5</a></li>
                                                   </ul>
                                                  
                                                  </div>
                                                   

                                                  </div>
                                               <div class="rem">
                                                <div class="pointer" style="height:30px" onclick=" remove('.$row['product_id'].')">
                                                    <b>REMOVE</b>  
                                                    </div> 
                                               </div>
                                             </div>      
                                   </div>';
                                }
                                }
                                          
                                       echo '   
                                    </div>
                                    <div class="col-sm-3" style="border-left-style:ridge;border-left-width:2px;border-left-color:#EAEAEC"  style="height:100px">
                                           <p style="color:#4c4c4c;font-size:20px;">PRICE DETAILS</p>
                                           <div>
                                           <p>Total MRP</p>
                                           <p>Bag Discount</p>
                                           <p>Estimated Tax</p>
                                           <p>Delivery Charges</p>
                                           <b>TOTAL</b>
                                           </div>

                                    </div>
           
                                </div>
           
                           </div>';
                              }
                              else
                              {  echo '
                                 <div style="text-align:centre;position:absolute;top:300px;left:500px">Sign in To buy
                                 </div>';
                              }
                           ?>
           

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