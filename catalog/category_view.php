<?php 
	function get_discounted_price($list_price, $discount_percent) {
		// Calculate discounts
		$discount_amount = round($list_price * ($discount_percent / 100), 2);
		$final_cost =  $list_price - $discount_amount;
		return '$'.number_format($final_cost, 2);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/nav.css" />
		<link rel="stylesheet" href="../css/product.css" />
	
		<script src="../js/jquery-1.8.0.js"></script>
	
		<script>
			//JQuery to make whole product div clickable as href
			$(document).ready(function() {			
				$(".product_grid").click(function(){
     				window.location=$(this).find("a").attr("href"); 
    	 			return false;
				});			
			});
		</script>
	
	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		<div id="container">
			<div id="leftContent">
				<?php include 'view/sidebar.php'; ?>
			</div>

			<div id="centerContent">
			    <div id="products_container">
				    <h1><?php echo $category_name . ": " . $subcategory_name; ?></h1>
				    <?php if (count($products) == 0) : ?>
				        	<p>There are no products in this category.</p>
				        	<p>Check back soon, we are always adding new inventory.</p>
				    <?php else:
				    		foreach ($products as $product) :  
				    ?>
								<div class="product_grid" >	
									<div class="product_grid_name">
										<?php echo $product['productName']; ?>
									</div>
									<div class="product_grid_image">
										<a href="<?php echo '?product_id=' . $product['productID']; ?>" >
						        	  		<?php 
						        	  			if ($product['productThumbnail'] !='') :
						        	  				echo '<img src="../images/catalog/thumbs/' .  $product['productThumbnail'] . '">'; 
						        	  			else :
						        	  				echo '<img src="../images/catalog/thumbs/no_photo.jpg">';						        	  				
						        	  			endif;
						        	  		?> 
						        	  	</a>
									</div>
									<div class="product_grid_info">
										List Price: <?php echo '$'.number_format($product['listPrice'], 2); ?><br>
										Discount: <?php echo '$'.number_format($product['discountPercent'], 0) . "%"; ?><br>
										Final Cost: <?php echo get_discounted_price($product['listPrice'], $product['discountPercent'] )?><br>
										Level: <?php echo $product['levelName']; ?>
										<br>
									</div>
								</div>	
				        <?php endforeach; ?>
				    	<!-- Throw in a blank div to clear the above and close out our grid -->
				    	<div id="grid_end"></div>
				    <?php endif; ?>
			    </div>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>




