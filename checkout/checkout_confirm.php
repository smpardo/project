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
			    <h1>Confirm Order</h1>
			    <table id="cart">
			        <tr id="cart_header">
			            <th class="left" >Item</th>
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
			                    <?php echo $item['quantity']; ?>
			                </td>
			                <td class="right">
			                    <?php echo sprintf('$%.2f', $item['line_price']); ?>
			                </td>
			            </tr>
			        <?php endforeach; ?>
			        <tr id="cart_footer">
			            <td colspan="3" class="right"><b>Subtotal</b></td>
			            <td class="right">
			                <?php echo sprintf('$%.2f', $subtotal); ?>
			            </td>
			        </tr>
			        <tr>
			            <td colspan="3" class="right"><?php echo $state; ?> Tax</td>
			            <td class="right">
			                <?php echo sprintf('$%.2f', $tax); ?>
			            </td>
			        </tr>
			        <tr>
			            <td colspan="3" class="right">Shipping</td>
			            <td class="right">
			                <?php echo sprintf('$%.2f', $shipping_cost); ?>
			            </td>
			        </tr>
			            <tr>
			            <td colspan="3" class="right"><b>Total</b></td>
			            <td class="right">
			                <?php echo sprintf('$%.2f', $total); ?>
			            </td>
			        </tr>
				</table>
			    <p>
			        Proceed to: <a href="<?php echo '?action=payment'; ?>">Payment</a>
			    </p>		
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>

