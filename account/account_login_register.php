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
			form {
				width: 450px;
				margin: 0 auto;
				padding: 15px;
				border: 2px solid black;
				border-radius: 5px;
			}
			
			label {
				width: 10em;
				padding-right: 1em;
				float: left;
				text-align: right;
			}
		</style>	
	
	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="centerContentSingle">
				<h1>Mystic Rhythms User Admin</h1>
				<div id="content">
				    <h2>Login:</h2>
				    <form action="" method="post" id="login_form">
				        <div class="form_data">
					        <input type="hidden" name="action" value="login" />
					
					        <label>E-Mail:</label>
					        <input type="text" name="email" size="30" />
					        <br />
					
					        <label>Password:</label>
					        <input type="password" name="password" size="30" />
						</div>
				        <br />						
				        <div class="form_button">
				        	<label>&nbsp;</label>
				        	<input type="submit" value="Login" />
				        </div>
				    </form>
				
				    <h2>Register as new user:</h2>
				    <form action="" method="post">
				        <div class="form_data">				    
				        	<input type="hidden" name="action" value="view_register" />
				        </div>
				        <div class="form_button">
				        	<label>&nbsp;</label>				        	
				        	<input type="submit" value="Register" />
				    	</div>
				    </form>
				</div>
				
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>