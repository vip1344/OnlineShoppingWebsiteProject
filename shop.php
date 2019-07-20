<?php
 session_start();
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
                          
                         <div class="header2in">    <strong><a href="shop.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Home</a>
                                <a href="store.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Men</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Women</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Kids</a>
                                <a href="store1.php" style=" font-family:Simplifica;text-decoration:none;margin-left:55px;font-size:32px;color:white;">Home&Living</a>
                       
                       
                       
                        </strong> 
                                    </div>
                          <!-- slideshow-->
                              <div class="slideshow-container col-sm-12" >
                       
                                    
                                   <div  class="bich fadel">
                                         <img src="src/s1.jpg" alt="s1" class="image-responsive"  height="600" style="width:100%"> 
                                   </div>
                                   
                                   <div class="bich fadel">
                                        <img src="src/s2.jpg" alt="s1" class="image-responsive"  height="600" style="width:100%"> 
                                  </div>
                                  
                                  <div  class="bich fadel">
                                        <img src="src/s3.jpg" alt="s1" class="image-responsive" style="width:100%" height="600"> 
                                  </div>
                                  
                                  <div  class="bich fadel">
                                        <img src="src/s4.jpg" alt="s4" class="image-responsive" style="width:100%" height="600"> 
                                  </div>
                                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                 
                                
                                 
        <div class="container" id="boxes" style="width:100%">
                <div class="text-center" style="padding-left:80px;Color:white" >
                        <h1 style="font-family:Simplifica;font-size:50px;">
                                Top Categories
                        </h1>
                </div>
                
                <div class="row">
                        <div class="col-md-2  box pointer"  >
                             <img src="src/tshirt.jpg" alt="2" height="300">      
                        </div>
                        <div class="col-md-2 box"  >
                                 <img src="src/sports.jpg" alt="tshirt" height="300">    
                         </div>
                         <div class="col-md-2 box"  >
                                         <img src="src/bottom.jpg" alt="tshirt" height="300">    
                        </div>
                        <div class="col-md-2 box" >
                                 <img src="src/bottom.jpg" alt="tshirt" height="300">    
                         </div>
                </div>
        
                  
                <div class="row">
                         <div class="col-sm-2 box" >
                               <img src="src/tshirt.jpg" alt="tshirt" height="300">    
                         </div>
                         <div class="col-sm-2 box"  >
                                  <img src="src/sports.jpg" alt="tshirt" height="300">    
                          </div>
                          <div class="col-sm-2 box"  >
                                          <img src="src/bottom.jpg" alt="tshirt" height="300">    
                         </div>
                         <div class="col-sm-2 box"  >
                                  <img src="src/bottom.jpg" alt="tshirt" height="300">    
                          </div>
                 </div>
            </div>
        </div>              
           
                        
      
      

        
        
        
        
                        
        <script>
        var slide=0;


$(document).ready(function(){
     
  

    showSlide(slide);
    
    
    
   
});
function plusSlides(n)
{  
     slide+=n;
    
     if(slide>3)
     slide=0;
     else if(slide<0)
     slide=3;
     showSlide(slide);
}
function showSlide(nth)
{    
     if(nth>3)
     nth=0;
     else if(nth<0)
     nth=3;
    
   var slides=document.getElementsByClassName("bich");
   for(var i=0;i<4;i++)
   {
       if(i!=nth)
       {
           
   slides[i].style.display = "none";
       }
       else
     slides[nth].style.display = "block";
   }
}
var open=0;
function sideOpen()
{   if(open==0)
   { $(".sidebar").css("display","block");
    open=1;
   }
   else{
    $(".sidebar").css("display","none");
    open=0;
   }
}  
  if("<?php echo $im ?>")
  {
     $('.dropdown').hover(function(){
         $('.logged').css('display','block');
     },function(){
         $('.logged').css('display','none');
     });
  }
  else
  {

    $('.dropdown').hover(function(){
         $('.cart-dropdown').css('display','block');
     },function(){
         $('.cart-dropdown').css('display','none');
     });
  }
    
   

        </script>
        
</body>
</html>  
