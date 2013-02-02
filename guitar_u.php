<?php require_once('util/main.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/jquery-ui-1.9.2.css" />
 		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
		
		<style>
			#title {
				font-family: times new roman;
				font-weight: bold;
				font-style: italic;
			}		
		</style>
		
		 <script>
		 	$(function() {
		 		$( "#accordion" ).accordion({
		 			collapsible: true
		 		});
		 	});
		 </script>
	
	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="centerContentSingle">				
				<h2 id="title">Welcome to Guitar University &#64; Mystic Rhythms...<span style="font-size: 85%">Your one-stop source for guitar learnin'.</span></h2>
				
				<div id="accordion">
					<h3>Beginner</h3>
					<div>
						<p>Absolute Beginner Series with Erich Andreas</p>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/ppoiecarX-o?rel=0" seamless></iframe>	
						<iframe width="320" height="180" src="http://www.youtube.com/embed/8sQR5DyOQ0E" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/KSB8fmVhKZo" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/CF27dlZOzaE" seamless></iframe>				
						<iframe width="320" height="180" src="http://www.youtube.com/embed/TbJIEg8d4Sk" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/sQCNgEYsDcA" seamless></iframe>
					</div>

					<h3>Intermediate</h3>
					<div>
						Intermediate Guitar Series with Marty Schwartz. <br>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/jxmmYKE63og?rel=0" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/_MgNvXyVnY0?rel=0" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/8J4KbjJpG4w?rel=0" seamless></iframe>
					</div>
					
					<h3>Advanced</h3>
					<div>
						Advanced Guitar Techniques from JamPlay. <br>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/P1sI4CuQmFI?rel=0" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/V81qm8IrRQA?rel=0" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/QTmg8ch9cYc?rel=0" seamless></iframe>
					</div>
					
					<h3>God-like</h3>
					<div>
						Guitar God Joe Satriani teaches his iconic song, Surfing with the Alien - Four part series. <br>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/Yp7MExJ454c" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/W9GAPfmares" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/bH6KQ9Qc0gI" seamless></iframe>
						<iframe width="320" height="180" src="http://www.youtube.com/embed/sErcGctrwyc" seamless></iframe>
					</div>
				</div>
				
			
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>
