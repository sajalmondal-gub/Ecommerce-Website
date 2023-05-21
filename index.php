<!DOCTYPE>
<?php 
session_start();

include("functions/functions.php");

?>

<html>
<head>
    <title>My Online Shop</title>
	<link rel ="stylesheet" href="styless\style.css" media ="all"/>
	</head>
	<body style="background:white;">
	   <div class="main_wrapper">
	     <div class="header_wrapper">
		 <a href="index.php"> <img id="logo" src="images/logo.jpg"width="600" height="200"/></a>
		 <img id ="banner" src="images/sajal.gif"width="600" height="200"/>
		 </div>
		 
	      <div class="menubar"> 
		    <ul id="menu">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="all_products.php">All Products</a></li>
			  <li><a href="customer/my_account.php">My Account</a></li>
			  <li><a href="#">Sign Up</a></li>
			  <li><a href="cart.php">Shopping Cart</a></li>
			
			  <li><a href="#">Contact Us</a></li>
			
			</ul>
			<div id="form" >
			   <form method="get" action="result.php" enctype="multipart/form-data">
			     <input type="text" name="user_query" placeholder="Search a Product" />
				 <input type="submit" name="search" value="Search"/>
			    </form>
			
			</div>
		  
		  </div>
		  <div class="content_wrapper">
		  
		    <div id="sidebar"> 
			
			
			  <div id="sidebar_title">Categories</div>
			   <ul id= "cats">
			      <?php getCats();  ?>
				 
			     <ul>
			   <div id="sidebar_title">Brands</div>
			   <ul id= "cats">
			     
				 <?php getBrands(); ?>
				 
				 
			     <ul>
			   
			   
			  
			
			</div>
			
		    <div id="content_area">
			
			<?php cart();?>
			   <div id="shopping_cart">
			     <span style="float:right;font-size:18px;padding:5px;line-height:40px;"> 
				 
				 <?php 
				 
				 if(isset($_SESSION['customer_email'])){
					 
					echo "<b>Welcome: </b>". $_SESSION['customer_email']."<b style='color:balck;'>Your</b>"; 
				 }
				 else{
					 
					 echo "<b style='color:black;'> Welcome Guest!</b>";
				 }
				 ?>
				 
				
				 
				 <b style='color:black'>Shopping Cart-</b><b style='color:black'>TOtal Items:<?php total_items();?>  TOtal Price: <?php total_price();?> </b> <a href="cart.php" style="color:black">Go to Cart</a>
				 
				 <?php
				 if(!isset($_SESSION['customer_email'])){
					 
					echo "<a href='checkout.php' style='color:black;'>Login</a>"; 
					 
					 
				 }
				 else{
					 
					 echo "<a href='logout.php' style='color:black;'>Logout</a>";
				 }
				 
				 ?>
				 
				 </span>
			   </div>
			    
				
			  <div id="products_box">
			 
			    <?php getPro();  ?>
				<?php getCatPro();?>
				<?php getBrandPro();  ?>
				
			  </div>
			
			
			</div>
			
		  </div>
		  <div id="footer">
		    
			<h2 style="text-align:center;padding-top:15px;">&copy; 2021 by SAJAL MONDAL </h2>
		  
		  </div>
	   
	   
	   </div>
	    
	
	</body>
	</html>
	