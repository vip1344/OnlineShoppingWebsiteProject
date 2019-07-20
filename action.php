<?php 
	session_start();
	include('db.php');
	if(isset($_POST["category"])){
		$category_query="SELECT * FROM cate";
		$run_query=mysqli_query($con,$category_query);
		echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'><h4>Categories</h4></a></li>";
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$cid=$row['cat_id'];
				$cat_name=$row['cat_title'];
				echo "<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>";
			}
			echo "</div>";
		}
	}
	
	if(isset($_POST["brand"])){
		$category_query="SELECT * FROM brand";
		$run_query=mysqli_query($con,$category_query);
		echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'><h4>Brands</h4></a></li>";
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$bid=$row['brand_id'];
				$brand_name=$row['brand_title'];
				echo "<li><a href='#' class='brand' bid='$bid'>$brand_name</a></li>";
			}
			echo "</div>";
		}
	}
	if(isset($_POST['page']))
	{
		$sql="SELECT * FROM products_";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		$pageno=ceil($count/8);
		for($i=1;$i<=$pageno;$i++)
		{
			echo "
				<li><a href='#' page='$i' class='page'>$i</a></li>
			";
		}
	}
	if(isset($_POST['getProduct'])){

		$limit=	8;
		if(isset($_POST['setPage'])){
			$pageno=$_POST['pageNumber'];
			$start=($pageno * $limit)-$limit;
		}
		else{$start=0;}
		if(isset($_POST['price_sorted'])){
			$product_query="SELECT * FROM products_ ORDER BY price";
		}
		elseif(isset($_POST['pop_sorted'])){
			$product_query="SELECT * FROM products_ ORDER BY RAND()";
		}
		else{
		$product_query="SELECT * FROM products_ LIMIT $start,$limit";
		}
		$run_query=mysqli_query($con,$product_query);
		if(mysqli_num_rows($run_query)>0){
			$i=1;
			while($row=mysqli_fetch_assoc($run_query)){
				if($row['f_r']==1)
				{ 
					$pro_id=$row['product_id'];
				  echo '<div class="col-sm-4 pdt pointer '.$row['title'] .' '.$row['Brand'] .'" style="margin-left:45px' ;echo ';'; echo 'margin-bottom:20px';echo ';';  echo 'padding:0';echo ';';  echo 'height:370px';echo ';'; echo 'width:210px" >
						  <a ><img src="prdt/'.$row['image'].'" alt="black" height="280" width=100%></a> 
						<div class="brandy">
						   <b>'.$row['Brand'].'</b>
							<br>
						   <a href="#">'.$row['title'].'</a>
						   <br>
						   <span><strong>Rs'.$row['price'].'</strong>
							 </span>
							 <span style=" text-decoration: line-through">Rs'.$row['price'].'</span>
							 <span style="color:'.$row['color'].'">(50%OFF)</span>
							 <div class="atb">
								  <button class="btn" type="button" onclick="openSize('.$i.')" >ADD TO BAG</button>
										
								<span>Sizes:S,M,L,XL,XXL</span>
							 </div>
							 </div>
						   
						   <div class="size">
							   <p>Select a size
							   <button type="button" class="close" onclick="closeSize('.$i.')">&times;</button></p>
							   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%" >S</button>
							   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">M</button>
							   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">L</button>
							   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">XL</button>
							   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">XXL</button>
						
							</div>
					  </div>';
				      $i++;
					}
				
			}
		}
	}
	

	if(isset($_POST['get_selected_Category']) || isset($_POST['get_selected_brand']) || isset($_POST['search']) )
	{
		if(isset($_POST['get_selected_Category'])){
			$cid=$_POST['cat_id'];
			$sql="SELECT * FROM products_ WHERE product_cat='$cid'";
		}
		elseif(isset($_POST['get_selected_brand'])){
			$bid=$_POST['brand_id'];
			$sql="SELECT * FROM products_ WHERE product_brand=$bid";
			if(isset($_POST['price_sorted'])){
			$sql="SELECT * FROM products_ ORDER BY price";
			}
		}
	
		$run_query=mysqli_query($con,$sql);
		if(mysqli_num_rows($run_query)>0){
			$i=1;
		while($row=mysqli_fetch_array($run_query)){
			
			if($row['f_r']==1)
			{$pro_id=$row['product_id'];
			  echo '<div class="col-sm-4 pdt pointer '.$row['title'] .' '.$row['Brand'] .'" style="margin-left:45px' ;echo ';'; echo 'margin-bottom:20px';echo ';';  echo 'padding:0';echo ';';  echo 'height:370px';echo ';'; echo 'width:210px" >
					  <a href="#"><img src="prdt/'.$row['image'].'" alt="black" height="280" width=100%></a> 
					<div class="brandy">
					   <b>'.$row['Brand'].'</b>
						<br>
					   <a href="#">'.$row['title'].'</a>
					   <br>
					   <span><strong>Rs'.$row['price'].'</strong>
						 </span>
						 <span style=" text-decoration: line-through">Rs'.$row['price'].'</span>
						 <span style="color:'.$row['color'].'">(50%OFF)</span>
						 <div class="atb">
							  <button class="btn" type="button" onclick="openSize('.$i.')">ADD TO BAG</button>
									
							<span>Sizes:S,M,L,XL,XXL</span>
						 </div>
						 </div>
					   
					   <div class="size">
						   <p>Select a size
						   <button type="button" class="close" onclick="closeSize('.$i.')">&times;</button></p>
						   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%" >S</button>
						   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">M</button>
						   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">L</button>
						   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%">XL</button>
						   <button class="add_cart btn" pid='."$pro_id".' style="border-radius:50%" >XXL</button>
						
						</div>
				  </div>';
			$i++;
				}
			

		}
		}	

	}
	
	if(isset($_POST['cartcount'])){
		if(!(isset($_SESSION['loggedin']))){echo "0";}else{
		$uid=$_SESSION['loggedin'];
		$sql="SELECT * FROM cartitems";
		$run_query=mysqli_query($con,$sql);
		$count=mysqli_num_rows($run_query);
		echo $count;
		}
	}


		if(isset($_POST['addToProduct'])){
			if(!(isset($_SESSION['loggedin']))){echo "
						<div class='alert alert-danger' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Hey there!</strong> Sign in to buy stuff!
				</div>
					";}
			else{
			$pid=$_POST['proId'];
			$uid=$_SESSION['loggedin'];
			$size=$_POST['sizes'];
			$sql = "SELECT * FROM cartitems WHERE product_id = '$pid' AND user_id = '$uid'";
			$run_query=mysqli_query($con,$sql);
			$count=mysqli_num_rows($run_query);
			if($count>0)
			{
				echo "<div class='alert alert-danger' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Already added!
				</div>";
			}
			else
			{
				$sql = "SELECT * FROM products_ WHERE product_id = '$pid'";
				$run_query = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($run_query);
				$id = $row["product_id"];
				$pro_title = $row["title"];
				$pro_image = $row["image"];
				$pro_price = $row["price"];


				$sql="INSERT INTO `cartitems` (product_id,user_id,Brand,title,`image`,price,size,quantity) VALUES('$pid','$uid','$row[Brand]','$row[title]','$row[image]','$row[price]','$size',1)";
				$run_query = mysqli_query($con,$sql);
				if($run_query){
					echo "
						<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Product added to cart!
				</div>
					";}
					else
					{
						printf("error: %s\n", mysqli_error($con));
					}
				
			}
			}
		}
	
/*
	if(isset($_POST['cartmenu']) || isset($_POST['cart_checkout']))
	{
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM cart WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		if($count>0){
			$i=1;
			$total_amt=0;
		while($row=mysqli_fetch_array($run_query))
		{
			$sl=$i++;
			$pid=$row['p_id'];
			$product_image=$row['product_image'];
			$product_title=$row['product_title'];
			$product_price=$row['price'];
			$qty=$row['qty'];
			$total=$row['total_amount'];
			$price_array=array($total);
			$total_sum=array_sum($price_array);
			$total_amt+=$total_sum;

			if(isset($_POST['cartmenu']))
			{
				echo "
				<div class='row'>
									<div class='col-md-3'>$sl</div>
									<div class='col-md-3'><img src='assets/prod_images/$product_image' width='60px' height='60px'></div>
									<div class='col-md-3'>$product_title</div>
									<div class='col-md-3'>Rs $product_price</div>
				</div>
			";
			}
			else
			{
				echo "
					<div class='row'>
						<div class='col-md-2'><a href='#' remove_id='$pid' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
						<a href='#' update_id='$pid' class='btn btn-success update'><span class='glyphicon glyphicon-ok-sign'></span></a>
						</div>
						<div class='col-md-2'><img src='assets/prod_images/$product_image' width='60px' height='60px'></div>
						<div class='col-md-2'>$product_title</div>
						<div class='col-md-2'><input class='form-control price' type='text' size='10px' pid='$pid' id='price-$pid' value='$product_price' disabled></div>
						<div class='col-md-2'><input class='form-control qty' type='text' size='10px' pid='$pid' id='qty-$pid' value='$qty'></div>
						<div class='col-md-2'><input class='total form-control price' type='text' size='10px' pid='$pid' id='amt-$pid' value='$total' disabled></div>
					</div>
				";
			}
		}
		if(isset($_POST['cart_checkout'])){
		echo "
			<div class='row'>
						<div class='col-md-8'></div>
						<div class='col-md-4'>
							<b>Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$total_amt</b>
						</div>
					</div>
		";
		}
	}
}

	if(isset($_POST['removeFromCart']))
	{
		$pid=$_POST['pid'];
		$uid=$_SESSION['uid'];
		$sql="DELETE FROM cart WHERE p_id='$pid' AND user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		if($run_query){
			echo "
				<div class='alert alert-danger' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Item removed from cart!
				</div>
			";
		}	
	}

	if(isset($_POST['updateProduct']))
	{
		$pid=$_POST['updateId'];
		$uid=$_SESSION['uid'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$total=$_POST['total'];
		$sql="UPDATE cart SET qty='$qty', price='$price', total_amount='$total' WHERE p_id='$pid' AND user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		if($run_query){
			echo "
				<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Item updated!
				</div>
			";
		}

	}

	if(isset($_POST['cartcount'])){
		if(!(isset($_SESSION['uid']))){echo "0";}else{
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM cart WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		echo $count;
		}
	}


	if(isset($_POST['payment_checkout'])){
		$uid=$_SESSION['uid'];
		$sql="SELECT * FROM cart WHERE user_id='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$i=rand();
		while($cart_row=mysqli_fetch_array($run_query))
		{
			$cart_prod_id=$cart_row['p_id'];
			$cart_prod_title=$cart_row['product_title'];
			$cart_qty=$cart_row['qty'];
			$cart_price_total=$cart_row['total_amount'];

			$sql2="INSERT INTO customer_order (uid,pid,p_name,p_price,p_qty,p_status,tr_id) VALUES ('$uid','$cart_prod_id','$cart_prod_title','$cart_price_total','$cart_qty','CONFIRMED','$i')";
			$run_query2=mysqli_query($conn,$sql2);
		}
		$i++;
		$sql3="DELETE FROM cart WHERE user_id='$uid'";
		$run_query3=mysqli_query($conn,$sql3);
	}

	if(isset($_POST['product_detail'])){
		$pid=$_POST['pid'];
		$sql="SELECT * FROM products WHERE product_id='$pid'";
		$run_query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($run_query);
		$pro_id=$row['product_id'];
		$image=$row['product_image'];
		$title=$row['product_title'];
		$price=$row['product_price'];
		$desc=$row['product_desc'];
		$tags=$row['product_keywords'];

		echo "
				<div class='row'>
					<div class='col-md-6 pull-right'>
						<img src='assets/prod_images/$image' style='width:250px;height:300px;'>
					</div>
					<div class='col-md-6'>
						<div class='row'> <div class='col-md-12'><h1>$title</h1></div></div>
						<div class='row'> <div class='col-md-12'>Price:<h3 class='text-muted'>$price</h3></div></div>
						<div class='row'> <div class='col-md-12'>Description:<h4 class='text-muted'>$desc</h4></div></div><br><br>
						<div class='row'> <div class='col-md-12'>Tags:<h4 class='text-muted'>$tags</h4></div></div>
						<button pid='$pro_id' class='product btn btn-danger'>Add to Cart</button>
					</div>
				</div>
		";
	}
 */


