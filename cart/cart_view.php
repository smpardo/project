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
			    <h1>Your Cart</h1>
			    <?php if (cart_product_count() == 0) : ?>
			        <p>There are no products in your cart.</p>
			    <?php else: ?>
			        <p>To remove an item from your cart, change its quantity to 0.</p>
			        <form action="." method="post">
			            <input type="hidden" name="action" value="update" />
			            <table id="cart">
			            <tr id="cart_header">
			                <th class="left">Item</th>
			                <th class="right">Price</th>
			                <th class="right">Quantity</th>
			                <th class="right">Total</th>
			            </tr>
			            <?php foreach ($cart as $product_id => $item) : ?>
			            <tr>
			                <td><?php echo $item['name']; ?></td>
			                <td class="right">
			                    <?php echo sprintf('$%.2f', $item['unit_price']); ?>
			                </td>
			                <td class="right">
			                    <input type="text" size="3" class="right"
			                           name="items[<?php echo $product_id; ?>]"
			                           value="<?php echo $item['quantity']; ?>" />
			                </td>
			                <td class="right">
			                    <?php echo sprintf('$%.2f', $item['line_price']); ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
			            <tr id="cart_footer" >
			                <td colspan="3" class="right" ><b>Subtotal</b></td>
			                <td class="right">
			                    <?php echo sprintf('$%.2f', cart_subtotal()); ?>
			                </td>
			            </tr>
			            <tr>
			                <td colspan="4" class="right">
			                    <input type="submit" value="Update Cart" />
			                </td>
			            </tr>
			            </table>
			        </form>
			        
			    <?php endif; ?>
			
			    <p>Return to: <a href="../">Home</a></p>
			
			    <!-- display most recent category -->
			    <?php if (isset($_SESSION['last_category_id'])) :
			            $category_url = '../catalog' .
			                '?category_id=' . $_SESSION['last_category_id'];
			        ?>
			        <p>Return to: <a href="<?php echo $category_url; ?>">
			            <?php echo $_SESSION['last_category_name']; ?></a></p>
			    <?php endif; ?>
			
			    <!-- if cart has items, display the Checkout link -->
			    <?php if (cart_product_count() > 0) : ?>
			        <p>
			            Proceed to: <a href="../checkout">Checkout</a>
			        </p>
			    <?php endif; ?>
				
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>



