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
				<h1>Ooopsie...</h1>
			    <p>Out database threw an error. Sorry about that.</p>
			    <p>Hit the back button and give it another try.</p>
			    <p>If the error happens again, please contact Mystic Rhythms Customer Support @ 1-800-PLAY GTR for assistance.</p>
			    <p class="error_text" >Error message: <?php echo $error_message; ?></p>
			    <p>&nbsp;</p>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>
