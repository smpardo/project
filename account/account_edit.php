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
			    <h2>Edit Account</h2>
			    <form action="" method="post">
			        <input type="hidden" name="action" value="update_account" />
			        <label for="email">E-Mail:</label>
			        <input type="text" name="email" value="<?php echo $email; ?>" />
			        <label for="first_name">First Name:</label>
			        <input type="text" name="first_name" value="<?php echo $first_name; ?>" />
			        <label for="last_name">Last Name:</label>
			        <input type="text" name="last_name" value="<?php echo $last_name; ?>" />
			        <label for="password_1">New Password:</label>
			        <input type="password" name="password_1" />&nbsp;&nbsp;Optional
			        <label for="password_2">Retype Password:</label>
			        <input type="password" name="password_2" />
			        <label>&nbsp;</label>
			        <input type="submit" value="Update Account" />
			        <label>&nbsp;</label>
			        <input type="submit" value="Cancel" />				    
			    </form>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>

