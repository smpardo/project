<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="../images/mr_icon.ico" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/nav.css" />
	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="centerContentSingle">
				<h1>Whoops...</h1>
			    <p>Looks like you had a little problem.  Take a look at the error message below...</p>				
			    <p class="error_text">Error message: <?php echo $error_message; ?></p>
			    <p>Then hit the back button and give it another try.</p>
			    <p>If you keep running into problems, please contact <br>Mystic Rhythms Customer Support @ 1-800-PLAY GTR for assistance.</p>
			    <p>&nbsp;</p>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>