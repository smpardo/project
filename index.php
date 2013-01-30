<?php

require_once('util/main.php');
require_once('model/product_db.php');
/*
// Set the featured product IDs in an array
$product_ids = array(1, 7, 9);
// Note: You could also store a list of featured products in the database

// Get an array of featured products from the database
$products = array();
foreach ($product_ids as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}
*/
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<script src="js/jquery-1.8.0.js"></script>
	
		<style>
			#slideshow {
				border: 1px solid lightgray;	
				margin:0px auto; 			
			}
			
			#slideshow #slideshowWindow { 
				width:700px; 
				height:500px; 
				margin:0px auto; 
				padding:0; 
				position:relative; 
				overflow:hidden; 
			} 
			
			#slideshow #slideshowWindow .slide { 
				margin:0; 
				padding:0; 
				width:700px; 
				height:500px; 
				float:left; 
				position:relative; 
			}	
			
			.slide img {
				max-width: 700px;
				max-height: 500px;
			}
			
			#slideshow #slideshowWindow .slide .slideText { 
				position:absolute; 
				bottom: 5px;
				left:0px; 
				width:100%; 
				height:120px; 
				background-color: rgba(98, 98, 98, 0.8); 
				margin:0px; 
				padding:10px; 
				color:black; 
			} 

			.slideLink" {
				border: 1px solid black;
				border-radius: 0px 0px 5px 5px;
				background-color: rgb(0,108,186);	
			}
					
			#slideshow #slideshowWindow .slide .slideText a:link, 
			#slideshow #slideshowWindow .slide .slideText a:visited { 
				color:black; 
				text-decoration:none; 
			} 
			
			#slideshow #slideshowWindow .slide .slideText h2, 
			#slideshow #slideshowWindow .slide .slideText p { 
				margin:10px 0 0 10px; 
				padding:0; 
			}			
			
			h2, h3 {
				font-family: times new roman;
				font-weight: bold;
				font-style: italic;
			}
			
		</style>
		
		<script type="text/javascript"> 
			$(document).ready(function() {

				var currentPosition = 0; 
				var slideWidth = 700; 
				var slides = $('.slide'); 
				var numberOfSlides = slides.length;
				var slideShowInterval; var speed = 3000;				

				slideShowInterval = setInterval(changePosition, speed);

				slides.wrapAll('<div id="slidesHolder"></div>');
				slides.css({ 'float' : 'left' });
				$('#slidesHolder').css('width', slideWidth * numberOfSlides);

				function changePosition() { 
					if(currentPosition == numberOfSlides - 1) { 
						currentPosition = 0; 
					} else { 
						currentPosition++; 
					} moveSlide();
				} 

				function moveSlide() { 
					$('#slidesHolder') .animate({'marginLeft' : slideWidth*(-currentPosition)}); 
				}

			}); 
			
		</script>
	
	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="centerContentSingle">				
				<h2>Welcome to Mystic Rhythms...<span style="font-size: 85%">Your Guitar and Drum Superstore.</span></h2>
				<h3>Featured Items:</h3>
			
				<div id="slideshow"> 
					<div id="slideshowWindow"> 
						<div class="slide"> 
							<img src="images/catalog/large/gib_lp_std_front.jpg" /> 
							<div class="slideText"> 
							 	<h3 class="slideTitle">Gibson Les Paul Standard</h3> 
						 		<p class="slideDes">Lorem ipsum dolor sit amet, consectetur 
						 		adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						 		et dolore magna aliqua.</p> 
						 		<p class="slideLink"><a href="http://localhost/scott/project/catalog/?product_id=2">Shop Now</a></p> 
							</div>
						</div> 
						<div class="slide"> 
							<img src="images/catalog/large/gib_lp_std_back.jpg" /> 
							<div class="slideText"> 
							 	<h3 class="slideTitle">Guitar 4</h3> 
						 		<p class="slideDes">Lorem ipsum dolor sit amet, consectetur 
						 		adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						 		et dolore magna aliqua.</p> 
						 		<p class="slideLink"><a href="http://localhost/scott/project/catalog/?product_id=4">Shop Now</a></p> 
							</div>
						</div> 
						<div class="slide"> 
							<img src="images/catalog/large/gib_lp_std_oblique.jpg" /> 
							 <div class="slideText"> 
							 	<h3 class="slideTitle">Guitar 5</h3> 
						 		<p class="slideDes">Lorem ipsum dolor sit amet, consectetur 
						 		adipisicing elit, sed do eiusmod tempor incididunt ut labore 
						 		et dolore magna aliqua.</p> 
						 		<p class="slideLink"><a href="http://localhost/scott/project/catalog/?product_id=5">Shop Now</a></p> 
							 </div>						
						</div> 
					</div>
				</div>				

			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>