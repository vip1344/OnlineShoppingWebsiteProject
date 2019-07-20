<?php

echo '<div class="nav navbar-default" style="background-color: #262626;margin:auto;border:0;position:fixed;width:100%;z-index: 999">
<div class="row" style="margin:auto;border:0">
     
        <div class="col-sm-3">
                <img src="src/logo.jpg" height="75px" width="200px">

        </div>
        <div class="col-sm-6 " >
                 <div style="padding-top:10px;">
                                <form class="example" action="/action_page.php" style="margin:auto;max-width:400px; ">
                                        <input type="text" placeholder="Search.." name="search2" >
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                 </div>
        </div>
        <div class="col-sm-3 shop3" style="padding:0;width:200px">    
                 <div class="dropdown hehe" style="width:50px">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="pointer glyphicon glyphicon-user" data-toggle="dropdown" data-target="#swin" style="content:\2212;color: ivory;padding:30px;"></i>
               
                    </a>
                    
                    <div class="cart-dropdown">
                                <p><strong>Your Account</strong></p>
                                <p>Access account and manage orders</p>
                                <button type="button" class="btn" onclick='.'window.location.href="register.php"'.'>Sign Up</button>
                                <button type="button" class="btn" id="loginmodal" onclick='.'window.location.href="login.php"'.' "style="padding-left:20px;padding-right:20px">Login</button>
                    </div>
                    
                    <div class="logged" >
                          <div class="pointer"style="padding-left:20px" onclick='.'window.location.href="profile.php"'.'>
                                      <strong> <p href="">Hi, ';echo $_SESSION["name_"];echo'</p>
                                </strong>
                          </div> 
                          <div class="pointer" style="padding-left:20px;margin-bottom:10px">
                               <strong>Your Order</strong>
                          </div> 

                          <div class="pointer" onclick='.'window.location.href="logout.php"'.' style="padding-left:20px">
                                 <strong>Log Out</strong>
                           </div> 

                    </div>
                 </div>
                 <div style="position:absolute;width:50px;top:-1px;left:100px;">
                          <a id="carticon" href="checkout.php">
                                <span class="glyphicon glyphicon-shopping-cart"  style="content:\2212;color: ivory;padding:30px;"><span class="badge">2</span></span>
                        </a>
                              
                 </div>
                 <div class="menuBar"style="position:absolute;width:50px;top:-1px;left:195px;" onclick="sideOpen()">
                                <a >
                                                <i class="pointer glyphicon glyphicon-menu-hamburger" style="content:\2212;color: ivory;padding:30px;"></i>
                                        </a> 
                 </div>
        </div>
        
</div>    
</div>';




?>