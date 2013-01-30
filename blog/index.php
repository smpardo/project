<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="../images/mr_icon.ico" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/nav.css" />
	
		<style>
			#blog_frame {
				height: 1000px;
				width: 100%;
				frameborder: 0;
				border:none;
			}

		</style>
	
	</head>
	<body>	
	<div id="wrapper">
		<?php 
			$no_quote = "Y";
		include '../view/header.php'; ?>
		
		<div id="container">
			<div id="contentSingle">				
				<iframe id="blog_frame" src="http://localhost/wordpress/" seamless></iframe>
			</div>
		</div>
		<?php include '../view/footer.php'; ?>	
	</div>
</body>
</html>