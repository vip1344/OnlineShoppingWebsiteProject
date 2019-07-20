<?php
session_start();
 $type='';
 if(isset($_GET['type']))
  $type= $_GET['type'];

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

                <!-- filter-->  

       
  <br>
  <div class="fluid-container" style="height:110px;width:1349px">
                     
                            </div>

                            <div class="container-fluid">
		<div class="row">
			
			<div class="col-md-2">
			<div id="get_cat"></div>
				
				<div id="get_brand"></div>
			
			</div>
			<div class="col-md-10">
			<div class="row">
					<div class="col-md-12" id="cartmsg">

					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--Featured Products--
						<div class='pull-right'>
								Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#" id='pop_sort'>Popularity</a>
							</div>
					</div>
					<div class="panel-body">
					<div id="get_product"></div>
					
					</div>
					<div class="panel-footer">&copy; 2019</div>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>

                  <!--filter exit-->


                    
                
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
    
   

$(document).ready(function(){
     
   
     
    
   
    });
    
        </script>
</body>
</html>
