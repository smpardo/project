<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
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
			    <h2 class="top">Register</h2>
			    <form action="" method="post" id="register_form">
			
			        <h2>Customer Information</h2>
			        <div class="form_data">
				        <input type="hidden" name="action" value="register" />
				
				        <label>E-Mail:</label>
				        <input type="text" name="email"
				               value="<?php echo $_SESSION['form_data']['email']; ?>"
				               size="30" />
				        <br />
				
				        <label>Password:</label>
				        <input type="password" name="password_1" size="30" />
				        <?php echo $password_message; ?>
				        <br />
				
				        <label for="password_2">Retype Password:</label>
				        <input type="password" name="password_2" size="30" />
				        <br />
				
				        <label for="first_name">First Name:</label>
				        <input type="text" name="first_name"
				               value="<?php echo $_SESSION['form_data']['first_name']; ?>" 
				               size="30" />
				        <br />
				
				        <label for="last_name">Last Name:</label>
				        <input type="text" name="last_name"
				               value="<?php echo $_SESSION['form_data']['last_name']; ?>"
				               size="30" />
				        <br />
				
				        <h2>Shipping Address</h2>
				        <label for="ship_line1">Address:</label>
				        <input type="text" name="ship_line1"
				               value="<?php echo $_SESSION['form_data']['ship_line1']; ?>"
				               size="30" />
				        <br />
				
				        <label for="ship_line2">Line 2:</label>
				        <input type="text" name="ship_line2"
				               value="<?php echo $_SESSION['form_data']['ship_line2']; ?>"
				               size="30" />
				        <br />
				
				        <label for="ship_city">City:</label>
				        <input type="text" name="ship_city"
				               value="<?php echo $_SESSION['form_data']['ship_city']; ?>"
				               size="30" />
				        <br />
				
				        <label for="ship_state">State:</label>
				        <input type="text" name="ship_state"
				               value="<?php echo $_SESSION['form_data']['ship_state']; ?>"
				               size="30" />
				        <br />
				
				        <label for="ship_zip">Zip Code:</label>
				        <input type="text" name="ship_zip"
				               value="<?php echo $_SESSION['form_data']['ship_zip']; ?>"
				               size="30" />
				        <br />
				
				        <label for="ship_phone">Phone:</label>
				        <input type="text" name="ship_phone"
				               value="<?php echo $_SESSION['form_data']['ship_phone']; ?>"
				               size="30" />
				        <br />
				
				        <h2>Billing Address</h2>
				        <label>&nbsp;</label>
				        <input type="checkbox" name="use_shipping"
				               <?php if ($_SESSION['form_data']['use_shipping']) : ?>
				                   checked="checked"
				               <?php endif; ?>
				               size="30" />
				        Use shipping address
				        <br />
				
				        <label for="bill_line1">Address:</label>
				        <input type="text" name="bill_line1"
				               value="<?php echo $_SESSION['form_data']['bill_line1']; ?>"
				               size="30" />
				        <br />
				
				        <label for="bill_line2">Line 2:</label>
				        <input type="text" name="bill_line2"
				               value="<?php echo $_SESSION['form_data']['bill_line2']; ?>"
				               size="30" />
				        <br />
				
				        <label for="bill_city">City:</label>
				        <input type="text" name="bill_city"
				               value="<?php echo $_SESSION['form_data']['bill_city']; ?>"
				               size="30" />
				        <br />
				
				        <label for="bill_state">State:</label>
				        <input type="text" name="bill_state"
				               value="<?php echo $_SESSION['form_data']['bill_state']; ?>"
				               size="30" />
				        <br />
				
				        <label for="bill_zip">Zip Code:</label>
				        <input type="text" name="bill_zip"
				               value="<?php echo $_SESSION['form_data']['bill_zip']; ?>"
				               size="30" />
				        <br />
				
				        <label for="bill_phone">Phone:</label>
				        <input type="text" name="bill_phone"
				               value="<?php echo $_SESSION['form_data']['bill_phone']; ?>"
				               size="30" />
				        <br />
						</div>
						
						<div class="form_button">
				        <label>&nbsp;</label>
				        <input type="submit" value="Register" />
			       	</div>
			    </form>
			<?php
			if (isset($_SESSION['form_data'])) {
			    unset($_SESSION['form_data']);
			}
			?>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>


