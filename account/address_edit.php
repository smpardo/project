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
    			<h1 class="top"><?php echo $heading; ?></h1>
			    <form action="" method="post" id="edit_address_form">
			        <input type="hidden" name="action" value="update_address" />
			        <?php if ($billing) : ?>
			            <input type="hidden" name="address_type" value="billing" />
			        <?php else: ?>
			            <input type="hidden" name="address_type" value="shipping" />
			        <?php endif; ?>
			        <label for="line1">Address:</label>
			        <input type="text" name="line1" value="<?php echo $line1; ?>" />
			        <label for="line2">Line 2:</label>
			        <input type="text" name="line2" value="<?php echo $line2; ?>" />
			        <label for="city">City:</label>
			        <input type="text" name="city" value="<?php echo $city; ?>" />
			        <label for="state">State:</label>
			        <input type="text" name="state" value="<?php echo $state; ?>" />
			        <label for="zip">Zip Code:</label>
			        <input type="text" name="zip" value="<?php echo $zip; ?>" />
			        <label for="phone">Phone:</label>
			        <input type="text" name="phone" value="<?php echo $phone; ?>" />
			        <label>&nbsp;</label>
			        <input type="submit" value="<?php echo $heading; ?>" />
			        
			        <label>&nbsp;</label>
			        <input type="submit" value="Cancel" />
			    </form>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>

