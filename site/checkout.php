<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Tasawouq Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nuevo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
<!--start-home-->
<!-- header_top -->
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
                <ul>
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="">'.$_SESSION['loggedUser']['fname'].'</a>'; else echo '<a href="account.php">Login</a>'?></li>
                    <li><?php if(isset($_SESSION['loggedUser'])) echo '<a href="../users/logout.php">Logout</a>'; else echo '<a href="account.php">Sign Up</a>'?></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
			</div>
			<div class="top_left">
				<h6><span></span> Call us : 032 2352 782</h6>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>Nuevo <span>Shop</span></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<a href="checkout.php">
				<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
								    <li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">Pools &amp; Tees</a></li>
									<li><a href="product.php">shirts</a></li>
									<li><a href="product.php">shorts</a></li>
									<li><a href="product.php">twinsets</a></li>
									<li><a href="product.php">kurts</a></li>
									<li><a href="product.php">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">Handbag</a></li>
									<li><a href="product.php">Slingbags</a></li>
									<li><a href="product.php">Clutches</a></li>
									<li><a href="product.php">Totes</a></li>
									<li><a href="product.php">Wallets</a></li>
									<li><a href="product.php">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">Belts</a></li>
									<li><a href="product.php">Pens</a></li>
									<li><a href="product.php">Eyeglasses</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">Watches</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="account.php">login</a></li>
									<li><a href="account.php">create an account</a></li>
									<li><a href="product.php">create wishlist</a></li>
									<li><a href="product.php">my shopping bag</a></li>
									<li><a href="product.php">brands</a></li>
									<li><a href="product.php">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="product.php">trends</a></li>
									<li><a href="product.php">sale</a></li>
									<li><a href="product.php">style videos</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="product.php">new arrivals</a></li>
									<li><a href="product.php">men</a></li>
									<li><a href="product.php">women</a></li>
									<li><a href="product.php">accessories</a></li>
									<li><a href="product.php">kids</a></li>
									<li><a href="product.php">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul> 
	</div>
</div>
</div>
 <!--start-content-->
<!-- checkout -->
<div class="cart-items">
	<div class="container">
			 <h3 class="tittle">My shopping(3)</h3>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/f4.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/f5.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
			  <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
							$('.cart-header3').fadeOut('slow', function(c){
						$('.cart-header3').remove();
					});
					});	  
					});
			 </script>
			  <div class="cart-header3">
				 <div class="close3"> </div>
				  <div class="cart-sec lost simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/f6.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
						<ul class="qty">
							<li><p>Min. order value:</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>		
		 </div>
		 </div>
      <!--//checkout-->
		  <!--start-bottom-->
		    <!--start-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clearfix"> </div>      
						  <!--start-image-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--//end-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 2
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 3
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  </div>				
			</div>
 <!--//end-bottom-->
		<!--start-footer-->
	     <div class="footer">
<!--		   <div class="container">-->
<!--			<div class="footer-top">-->
<!--				<div class="col-md-2 footer-left">-->
<!--					<h3>About Us</h3>-->
<!--					<ul>-->
<!--						<li><a href="#">Who We Are</a></li>-->
<!--						<li><a href="contact.php">Contact Us</a></li>-->
<!--						<li><a href="#">Our Sites</a></li>-->
<!--						<li><a href="#">In The News</a></li>-->
<!--						<li><a href="#">Carrers</a></li>					 -->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="col-md-2 footer-left">-->
<!--					<h3>Your Account</h3>-->
<!--					<ul>-->
<!--						<li><a href="account.php">Your Account</a></li>-->
<!--						<li><a href="#">Personal Information</a></li>-->
<!--						<li><a href="contact.php">Addresses</a></li>-->
<!--						<li><a href="#">Discount</a></li>-->
<!--						<li><a href="#">Track your order</a></li>					 					 -->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="col-md-2 footer-left">-->
<!--					<h3>Shopping</h3>-->
<!--					<ul>-->
<!--						<li><a href="#">Accesories</a></li>-->
<!--						<li><a href="#">Books</a></li>-->
<!--						<li><a href="#">Cloths</a></li>-->
<!--						<li><a href="#">Bags</a></li>-->
<!--						<li><a href="#">Shoes</a></li>					 -->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="col-md-2 footer-left ">-->
<!--					<h3>Categories</h3>-->
<!--					<ul>-->
<!--						<li><a href="#">Sports Shoes</a></li>-->
<!--						<li><a href="#">Casual Shorts</a></li>-->
<!--						<li><a href="#">Formal Shoes</a></li>-->
<!--						<li><a href="#">Party Wear</a></li>-->
<!--						<li><a href="#">Ethnic Wear</a></li>				 -->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="col-md-2 footer-left lost">-->
<!--					<h3>Life Style</h3>-->
<!--					<ul>-->
<!--						<li><a href="#">Spa</a></li>-->
<!--						<li><a href="#">Beauty</a></li>-->
<!--						<li><a href="#">Travel</a></li>-->
<!--						<li><a href="#">Food</a></li>-->
<!--						<li><a href="#">Trends</a></li>					 -->
<!--					</ul>-->
<!--				</div>-->
<!--				<div class="clearfix"> </div>-->
<!--			</div>-->
<!--				-->
<!--		</div>-->
	</div>
	<ul class="socials">
				    <li><a class="soc1" href="#"></a></li>
				    <li><a class="soc2" href="#"></a></li>
				    <li><a class="soc3" href="#"></a></li>
				</ul>
	 <!--/start-copyright-->
	 <div class="copy">
		<div class="container">
			<p>&copy; 2015 Nuevo Shop. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
	 <!--//end-copyright-->
	<!--end-footer-->
 <!--//end-content-->
    	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>