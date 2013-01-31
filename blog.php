<!DOCTYPE html>

<html lang="en">
<head>
	<head>
		<meta charset="utf-8" />
		<title>Mystic Rhythms</title>
		<link rel="shortcut icon" href="images/mr_icon.ico" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/nav.css" />
	
		<style>
			#blogFrame {
				height: 475px;
				width: 100%;
				frameborder: 0;
				border:none;
			}
		</style>
		
		<script type="text/javascript">
		    <!--
			//dynamic sizing of blog frame
		    onload=function() {
			    var divh = document.getElementById('header').offsetHeight;
			    var divf = document.getElementById('footer').offsetHeight; 
			    var body = document.body,
			    	html = document.documentElement;
	
				var height = Math.max( body.scrollHeight, body.offsetHeight, 
	                    html.clientHeight, html.scrollHeight, html.offsetHeight );
	
				var frame = document.getElementById('blogFrame');
			    frame.style.height = height - ( divh + divf + 30) + "px";
			}
		    //-->
    	</script>

	</head>
	<body>	
	<div id="wrapper">

		<?php 
			$no_quote = "Y";
			include 'view/header.php'; 
		?>
	
		<div id="container">
		
			<?php echo $app_path;?>
			<div id="contentSingle">				
				<iframe id="blogFrame" src="../../wordpress/" seamless></iframe>
			</div>
		</div>
		<?php include 'view/footer.php'; ?>	
	</div>
</body>
</html>