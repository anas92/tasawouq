<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
require_once '../config.php';
require_once '../functions.php';

$settings=new Settings();
$settings=$settings->getAll();
$setting=$settings[0];
?>
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
 <script src="js/scripts.js" type="text/javascript"></script>
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
<!--header-->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>Tasawouq <span>Shop</span></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="cart box_1">
				<a href="checkout.php">
				<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<i class="glyphicon glyphicon-shopping-cart"></i></a>
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
		 <!--start-banner-->
		    <div class="banner">
			    <div class="container">
				   <div class="banner-grids">
				       <div class="col-md-6 jocket">
						   <div class="jock-img">
						     <img src="images/sht.jpg" alt="">
						   </div>
						    <div class="jock-text">
						      <h3 class="b-tittle">Men's Jacket</h3>
							 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
						   </div>
						   <div class="clearfix"> </div>
					   </div>
					   <div class="col-md-6 shoe">
							   <div class="shoe-img">
								 <img src="images/shoe.jpg" class="img-responsive" alt="">
							   </div>
								<div class="shoe-text">
								   <h3 class="b-tittle">Men's Shoes</h3>
								 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
							   </div>
							   <div class="clearfix"> </div>
						<div class="bottom-bags">
							   <div class="col-md-6 pack">
								  <div class="bag-text">
									   <h3 class="b-tittle">Bags</h3>
									 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
								   </div>
								   <div class="bag-img">
									 <img src="images/bag.jpg" class="img-responsive" alt="">
								   </div>
								   <div class="clearfix"> </div>
								   
							   </div>	
							   <div class="col-md-6 glass">
								  <div class="glass-text">
									   <h3 class="b-tittle">Glasses</h3>
								 <a class="collection" href="single.php">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
								   </div>
								   <div class="glass-img">
									 <img src="images/glass.jpg" class="img-responsive" alt="">
								   </div>
								   <div class="clearfix"> </div>
								   
							   </div>	
								<div class="clearfix"> </div>						   
							</div>
					    </div>						   
						   <div class="clearfix"> </div>
				   </div>
				</div>
			</div>
         <!--/start-fashion-->
		<div class="fashion-section">
		 <div class="container"> 
		     <h3 class="tittle"><?=$setting["home_txt1"]?></h3>

		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f1.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f2.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
								<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f3.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
       <!--//fashion-->
	    <!--/start-latest-->
		<div class="collection-section">
		 <div class="container"> 
		     <h3 class="tittle fea"><?=$setting["home_txt2"]?></h3>

		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f4.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f5.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
								<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f6.jpg" alt=""/>
						<figcaption>
							<h4>Tasawouq Shop</h4>
							<p class="cart"><a href="single.php">Shop</a></p>
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
       <!--//latest-->
<!--		 <div class="container">-->
<!--				<div class="recommand-section">-->
<!--					<div class="recommand-section-head text-center">-->
<!--						<h3 class="tittle fea">Recommended Products</h3>-->
<!--					</div>-->
<!--					<div class="recommand-section-grids">-->
<!---->
<!--						<div class="standards">-->
<!--					   <h5>Tags<i class="glyphicon glyphicon-tag"></i></h5>-->
<!--						<ul class="selectors_wrapper">-->
<!--								<li class="selector active" data-selector="1">Popular</li>-->
<!--								<li class="selector" data-selector="2">Sales</li>-->
<!--								<li class="selector" data-selector="3">Seller</li>-->
<!--								<li class="selector" data-selector="4">Rate</li>-->
<!--						</ul>-->
<!--						-->
<!--						<div class="standard_content">-->
<!--							<div class="standard active" data-selector="1">-->
<!--							<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="r-title">-->
<!--										<h3>Sunny Dress</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="atc"><a href="single.php">Shop</a></div>-->
<!--					       </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>White Shirt</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Puma Shoe</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="clearfix"></div>-->
<!--							</div>-->
<!--							<div class="standard" data-selector="2">-->
<!--								<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Sunny Dress</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>White Shirt</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Puma Shoe</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--							<div class="clearfix"></div>-->
<!--							</div>-->
<!--							<div class="standard" data-selector="3">-->
<!--						      	<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Sunny Dress</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>White Shirt</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Puma Shoe</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="clearfix"></div>-->
<!--                      </div>-->
<!--					   <div class="standard" data-selector="4">-->
<!--					     	<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s1.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Sunny Dress</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s3.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>White Shirt</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--						<div class="tag-grid">-->
<!--								<div class="tag-wrapper">		-->
<!--									<a href="single.php"><img src="images/s2.jpg" class="img-responsive" alt="" /></a>-->
<!--									<div class="atc"><a href="single.php">Shop</a></div>-->
<!--									<div class="r-title">-->
<!--										<h3>Puma Shoe</h3>-->
<!--										<h4>$30</h4>-->
<!--									</div>-->
<!--								</div>-->
<!--					    </div>-->
<!--							<div class="clearfix"></div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="clearfix"></div>-->
<!--					</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->

		  <div class="mid-content"> 
<!--            <div class="container"> -->
<!--			  <div class="middle">-->
<!--			    <div class="mid-top"> -->
<!--			      <h3>Discover a huge assortment of</h3>-->
<!--				  <p>women`s handbags at the lowest prices</p>-->
<!--			    </div>-->
<!--			 </div>-->
<!--	       </div>-->
		 </div>
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
			<p>&copy; 2017 Tasawouq Shop. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
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