<?php

require_once('../util/main.php');
require_once('../model/product_db.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Mystic Rhythms Mobile</title>
			
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<link rel="stylesheet" href="../css/themes/mr_mobile.css" />
		<link rel="stylesheet" href="../css/main_mobile.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>		
	
		<script type="text/javascript"> 
			$(document).ready(function() {

				var currentPosition = 0; 
				var slideWidth = 300; 
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

				$(".slide").click(function(){
     				window.location=$(this).find("a").attr("href"); 
    	 			return false;
				});					
			}); 
		</script>

	</head>
	<body>
		<div id="page" data-role="page" >

			<div id="header" data-role="header" data-theme="a">
				<a href="index.php" data-icon="home" data-iconpos="notext" data-mini="true"></a>
				<img id="logo" src="../images/mr_main_logo_m.png" alt="Mystic Rhythms" />
			</div>
		
			<div id="start-page" data-role="content" >

				<div id="content">				
					<span class="topText">Your Guitar and Drum Superstore.</span> <br>
					<span class="topText">Product Categories:</span>
				
					<div id="slideshow"> 
						<div id="slideshowWindow"> 
							<div class="slide"> 
								<img src="../images/mobile/guitar.jpg" /> 
								<a href="products.php?subcategory_id=6"></a>
								<div class="slideText"> 
								 	<h3 class="slideTitle">Electric Guitars</h3> 
								</div>
							</div> 
							<div class="slide"> 
								<img src="../images/mobile/acoustic.jpg" /> 
								<a href="products.php?subcategory_id=7"></a>
								<div class="slideText"> 
								 	<h3 class="slideTitle">Acoustic Guitars</h3> 
								</div>
							</div> 
							<div class="slide"> 
								<img src="../images/mobile/bass.jpg" /> 
								 <a href="products.php?category_id=2"></a>
								 <div class="slideText"> 
								 	<h3 class="slideTitle">Bass Guitar</h3> 
								 </div>						
							</div> 
							<div class="slide"> 
								<img src="../images/mobile/drums.jpg" /> 
								<a href="products.php?category_id=3"></a>
								<div class="slideText"> 
								 	<h3 class="slideTitle">Drums</h3> 
								</div>
							</div> 
							<div class="slide"> 
								<img src="../images/mobile/accessories.jpg" /> 
								<a href="products.php?category_id=5"></a>
								<div class="slideText"> 
								 	<h3 class="slideTitle">Accessories</h3> 
								</div>
							</div> 
						</div>
					</div>				
					<span class="topText">Click a category to view products.</span>				
				</div>
			</div>
			
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<div data-role="controlgroup" data-type="horizontal" data-theme="b" data-mini="true" >
						<a href="about_us.html" data-role="button"  >About Us</a>
						<a href="contact_us.html" data-role="button" >Contact Us</a>
						<a href="../index.php" data-role="button"  rel="external">Full Site</a>
				</div>
			
				<p class="copyright">&copy; 2013 Mystic Rhythms Music. All rights reserved.</p>
			</div> 
		</div>
	</body>
</html>