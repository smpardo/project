<?php 
	function get_discounted_price($list_price, $discount_percent) {
		// Calculate discounts
		$discount_amount = round($list_price * ($discount_percent / 100), 2);
		$final_cost =  $list_price - $discount_amount;
		return '$'.number_format($final_cost, 2);
	}
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
				    <p class="topTextBig"><?php echo $category_name . ": " . $subcategory_name; ?></p>
				    <?php if (count($products) == 0) : ?>
				        	<p>There are no products in this category.</p>
				        	<p>Check back soon, we are always adding new inventory.</p>
				    <?php 
				    	else:
				    
				    		echo '<ul data-role="listview">';
				    		
				    		foreach ($products as $product) :  
				    			echo '<li><a href="products.php?product_id=' . $product['productID'] .  '">';
				    			if ($product['productThumbnail'] !='') :
		        	  				echo '<img src="../images/catalog/thumbs/' .  $product['productThumbnail'] . '">'; 
		        	  			else :
		        	  				echo '<img src="../images/catalog/thumbs/no_photo.jpg">';						        	  				
		        	  			endif;
				    			echo '<h3>' . $product['productName'] . '</h3>';
				    			echo '<p>' . get_discounted_price($product['listPrice'], $product['discountPercent'] ) . '</p>';
				    			echo '</li>';
				    		endforeach;
				    	echo '</ul>';
				    	endif;
					?>		
				</div>
			</div>
			
			<div id="footer" data-role="footer" data-theme="b" data-position="fixed">
				<div data-role="controlgroup" data-type="horizontal" data-theme="b" data-mini="true" >
						<a href="about_us.html" data-role="button"  >About Us</a>
						<a href="contact_us.html" data-role="button" >Contact Us</a>
						<a href="../index.php" data-role="button"  rel="external">Full Site</a>
				</div>
			
				<p class="copyright">&copy; 2013 Mystic Rhythms Music. All rights reserved.</p>
			</div> 
		</div>
	</body>
</html>