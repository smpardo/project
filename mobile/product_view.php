<?php
    // Parse data
    $category_id = $product['categoryID'];
    $product_code = $product['productCode'];
    $product_name = $product['productName'];
    $description = $product['description'];
    $level = $product['levelName'];
    $list_price = $product['listPrice'];
    $discount_percent = $product['discountPercent'];

    // Add HMTL tags to the description
    $description = add_tags($description);

    // Calculate discounts
    $discount_amount = round($list_price * ($discount_percent / 100), 2);
    $unit_price = $list_price - $discount_amount;

    // Format discounts
    $discount_percent = number_format($discount_percent, 0);
    $discount_amount = number_format($discount_amount, 2);
    $unit_price = number_format($unit_price, 2);

    // Get image URL and alternate text
    $image_filename = $product_code . '_m.png';
    $image_path = $app_path . 'images/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;

    $product_pics = get_product_images($product_id); 
       
    
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
	
	</head>
	<body>
		<div id="page" data-role="page" >

			<div id="header" data-role="header" data-theme="a">
				<a href="index.php" data-icon="home" data-iconpos="notext" data-mini="true"></a>
				<img id="logo" src="../images/mr_main_logo_m.png" alt="Mystic Rhythms" />
			</div>
		
			<div id="start-page" data-role="content" >

				<div id="content">	
							    
					<p class="topTextBig"><?php echo $product_name; ?></p>	

					<div id="gallery">
					<?php if (count($product_pics) != 0) : ?>					
					    	<div id="image_panel">
					    		<!--  we only need to output the first image -->
					   			<?php echo '<img id="largeImage" src="../images/catalog/large/' .  $product_pics[0]['productImageFileName'] . '"/>'; ?> 
					    	</div>
			 							 			
					<?php else :?>
							<div id="image_panel">
						   		<?php echo '<img id="largeImage" src="../images/catalog/large/no_photo.jpg"/>'; ?> 
						    </div>
					<?php endif; ?>
					</div>				

					<span class="topText">List Price: <?php echo '$' . $list_price; ?><br></span>
					<span class="topText">Discount: <?php echo $discount_percent . '%'; ?>  <br></span>
					<span class="topText">Your Price: <?php echo '$' . $unit_price; ?> <br></span>
				
				    <p class="topText">Description</p>
				    <?php echo $description; ?>
					<br>
					
					<p class="topText">Please visit our Full Site to Purchase.</p>
				
				</div>
			</div>
			
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<div data-role="controlgroup" data-type="horizontal" data-theme="b" data-mini="true" >
						<a href="about_us.html" data-role="button"  >About Us</a>
						<a href="contact_us.html" data-role="button" >Contact Us</a>
						<a href="../index.php" data-role="button" rel="external">Full Site</a>
				</div>
			
				<p class="copyright">&copy; 2013 Mystic Rhythms Music. All rights reserved.</p>
			</div> 
		</div>
	</body>
</html>

