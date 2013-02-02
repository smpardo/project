<?php

require_once('util/main.php');
require_once('model/product_db.php');

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
				width: 700px;			
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

			.slideLink {
				border: 1px solid black;
				border-radius: 5px 5px 5px 5px;
				background-color: red;
				width: 100px;
				text-align: center;	
				font-weight: bold;
			}
					
			#slideshow #slideshowWindow .slide .slideText a:link, 
			#slideshow #slideshowWindow .slide .slideText a:visited { 
				color:white; 
				text-decoration:none; 
			} 
			
			#slideshow #slideshowWindow .slide .slideText h2, 
			#slideshow #slideshowWindow .slide .slideText p { 
				margin:10px 0 0 10px; 
				padding:0; 
			}			
			
			h1, h2, h3 {
				font-family: times new roman;
				font-weight: bold;
				font-style: italic;
				color: rgb(0, 108, 186);
			}
			
			h3 {
				color: black;
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
				<h1>Welcome to Mystic Rhythms...<span style="font-size: 85%">Your Guitar and Drum Superstore.</span></h1>
				<h2>Featured Items:</h2>
			
				<div id="slideshow"> 
					<div id="slideshowWindow"> 
						<div class="slide"> 
							<img src="images/catalog/features/feature_gib_sg.jpg" /> 
							<div class="slideText"> 
							 	<h3 class="slideTitle">Gibson SG Faded</h3> 
						 		<p class="slideDes">This Gibson SG electric guitar takes the best of the '62 original 
						 			and adds the longer and sturdier neck joint of the late '60s models. 
						 			All the classic features you'd expect from a historic guitar.</p> 
						 		<p class="slideLink"><a href="catalog/?product_id=3">Shop Now</a></p> 
							</div>
						</div> 
						<div class="slide"> 
							<img src="images/catalog/features/feature_wash_d10s.jpg" /> 
							<div class="slideText"> 
							 	<h3 class="slideTitle">Washburn D10S</h3> 
						 		<p class="slideDes">The Washburn D10S Flame Top acoustic guitar is made with a solid 
						 		Alaskan Sitka spruce top, and mahogany back and sides.</p> 
						 		<p class="slideLink"><a href="catalog/?product_id=5">Shop Now</a></p> 
							</div>
						</div> 
						<div class="slide"> 
							<img src="images/catalog/features/feature_fen_strat.jpg" /> 
							 <div class="slideText"> 
							 	<h3 class="slideTitle">Fender Stratocaster Standard</h3> 
						 		<p class="slideDes">This Classic Fender Stratocaster features an alder body, a maple neck 
						 		with a 9.5" radius, 21 medium jumbo frets and vintage-style single-coil pickups.</p> 
						 		<div class="slideLink"><a href="catalog/?product_id=1">Shop Now</a></div> 
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