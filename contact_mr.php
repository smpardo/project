<?php

require_once('util/main.php');

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<script src="js/jquery-1.8.0.js"></script>
	
		<style>
			table {
				width: 550px;
			}
			
			td {
				valign: top;
			}
			
			#contact {
				width: 550px;
				clear: both;
				margin: 0px auto 0px auto;
			}
					
			.submit_button{
				background-color: rgb(0, 108, 186);
				border-radius: 5px 5px 5px 5px;	
				font-size: 115%;
				font-weight: bold;
				color: white;	
				margin: auto;	
					
			}
			
			h2 {
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
			<div id="centerContentSingle">				

				<h2>Contact Mystic Rhythms</h2>
				<p>Having a problem, issue or concern? &nbsp; Need assistance or advice? &nbsp; Just want to say Hi? <br> Drop us a line and we'll get back to you asap.</p>
				<div id="contact">					
					<form name="contactform" method="post" action="php/email_contact.php">
						<table>
							<tr>
								 <td>
								  	<label for="first_name">First Name *</label>
								 </td>
								 <td>
								  	<input  type="text" name="first_name" maxlength="50" size="40">
								 </td>
							</tr>
							<tr>
								 <td>
								  	<label for="last_name">Last Name *</label>
								 </td>
								 <td>
								  	<input  type="text" name="last_name" maxlength="50" size="40">
								 </td>
							</tr>
							<tr>
								 <td>
								  	<label for="email">Email Address *</label>
								 </td>
								 <td>
								  	<input  type="text" name="email" maxlength="80" size="40">
								 </td>
							</tr>
							<tr>
								 <td>
								  	<label for="telephone">Telephone Number</label>
								 </td>
								 <td>
								  	<input  type="text" name="telephone" maxlength="30" size="40">
								 </td>
							</tr>
							<tr>
								 <td>
								  <label for="comments">Comments *</label>
								 </td>
								 <td>
								  	<textarea  name="comments" maxlength="1000" cols="50" rows="20"></textarea>
								 </td>
							</tr>
							<tr>
								 <td colspan="2" style="text-align:center">
								  	<input class="submit_button" type="submit" value="Submit">   
								 </td>
								</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>



