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
			$(document).ready(function() {		
				$('#thumbs').delegate('img','click', function(){
					    $('#largeImage').attr('src',$(this).attr('src').replace('small','large'));
				});
			});
		</script>
		
		<style>
			/* modify main style for right column since we have content for it*/
			#rightContent{
				border-width: 4px; 
				border-style: solid; 
				border-color: rgb(0,108,186);
				border-radius: 5px 5px 5px 5px;		
				box-shadow: 2px 2px 2px 2px black;
			}
			
			h1, h2 {
				font-weight: bold;
				font-style: italic;
				color: rgb(0, 108, 186);
			}
		</style>

	</head>
	<body>	
	<div id="wrapper">
		<?php include 'view/header.php'; ?>
		
		<div id="container">
			<div id="leftContent">
				<?php include 'view/sidebar.php'; ?>
			</div>
			
			<div id="rightContent">				
			    <p><b>List Price:</b>
			        <?php echo '$' . $list_price; ?></p>
			    <p><b>Discount:</b>
			        <?php echo $discount_percent . '%'; ?></p>
			    <p><b>Your Price:</b>
			        <?php echo '$' . $unit_price; ?>
			        (You save
			        <?php echo '$' . $discount_amount; ?>)</p>
			    <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
			        <input type="hidden" name="action" value="add" />
			        <input type="hidden" name="product_id"
			               value="<?php echo $product_id; ?>" />
			        <b>Quantity:</b>&nbsp;
			        <input type="text" name="quantity" value="1" size="2" />
			        <input class="buy_button" type="submit" value="Add to Cart" />
			    </form>			
			</div>
			
			<div id="centerContent">
				<!-- add image viewer for product -->
				    
				<h1><?php echo $product_name; ?></h1>	

					<div id="gallery">
				<?php if (count($product_pics) != 0) : ?>					
				     <?php //first we check to make sure we have images
				     		//if ($image_count == 0) :
				     ?>
						    <div id="image_panel">
						    	<!--  we only need to output the first image into the large viewer -->
						   		<?php echo '<img id="largeImage" src="../images/catalog/large/' .  $product_pics[0]['productImageFileName'] . '"/>'; ?> 
						    </div>
				 			<?php //endif;?>
				 			
						    <div id="thumbs">
						    <?php foreach ($product_pics as $pic) : 
						    		echo '<img src="../images/catalog/small/' .  $pic['productImageFileName'] . '"/>';
						    	endforeach;
						    ?>
						    </div>
					<?php else :?>
							<div id="image_panel">
						    	<!--  we only need to output the first image into the large viewer -->
						   		<?php echo '<img id="largeImage" src="../images/catalog/large/no_photo.jpg"/>'; ?> 
						    </div>
				 			<?php //endif;?>
				 			
						    <div id="thumbs">
						    	<?php echo '<img src="../images/catalog/small/no_photo.jpg"/>';?>
						    </div>
					<?php endif; ?>
				</div>				

				<!-- Image viewer above -->

				    <h2>Description</h2>
				    <?php echo $description; ?>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>

