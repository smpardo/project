<?php 
//include the header_db.php file so we can add dynamic quotes to header
include($_SERVER['DOCUMENT_ROOT'] . '/scott/project/model/header_db.php');
?>

		<div id="header">
			<div id="logo">
				<a href="http://localhost/scott/project/">
					<img src="<?php echo $app_path .'images/mr_main_logo_m.png' ?>" alt="Mystic Rhythms"/>
				</a>
			</div>
			
			<div id="top_nav">
				<ul class="aux_nav">

		            <?php
		            // Check if user is logged in and
		            // display appropriate account links
            			$account_url = $app_path . 'account';
            			$logout_url = $account_url . '?action=logout';
            			if (isset($_SESSION['user'])) :
            		?>
                		<li><a href="<?php echo $account_url; ?>">My Account</a></li>
                		<li><a href="<?php echo $logout_url; ?>">Logout</a>
            		<?php else: ?>
                		<li><a href="<?php echo $account_url; ?>">Login/Register</a></li>
            		<?php endif; ?>
        			<li><a href="<?php echo $app_path . 'cart'; ?>">View Cart</a></li>
        			<li><a href="<?php echo $app_path . 'index.php' ?>">Home</a></li>
					<li><a href="<?php echo $app_path . '/contact_mr.php'?>">Contact</a></li>				
				</ul>
			</div>
			<div id="cust_serv">Customer Service: 1-800-PLAY-GTR</div>		
		    <div id="welcome">
			    <?php
			    	// Check if user is logged in, if they are display welcome message
	            	if (isset($_SESSION['user'])) :
						echo 'Welcome back ' . $_SESSION['user']['firstName'] . '!';
					endif;
	            ?>			
			</div>
			
			<div id="quote_block">
				<?php 
				// I HATE doing this but I just can't get it to work so here goes:
				// Wordpress does not like my Quote of the page feature so I am disabling it 
				// for the blog page.  $no_quote is set only in the blog source to "Y"
					if 	($no_quote != "Y") :  
						$quote_of_the_page = get_quote();
						echo $quote_of_the_page['quote'] . " - " .  $quote_of_the_page['author'] .", " . $quote_of_the_page['source'];
					else :
						echo "Changes aren't permanent, but Change is. - Rush, Tom Sawyer - Moving Pictures";
					endif;
					
				?>
			</div>
			
			<div id="main_nav">
				<div id="nav_container">
					<ul id="main">
						<li><a href="<?php echo $app_path . 'catalog?category_id=1'?>">Guitars</a>
							<ul>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=6'?>">Electric</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=7'?>">Acoustic</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=8'?>">Clasical</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $app_path . 'catalog?category_id=2'?>">Bass</a></li>						
						<li><a href="<?php echo $app_path . 'catalog?category_id=3'?>">Drums</a>
							<ul>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=10'?>">Acoustic</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=11'?>">Electric</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=12'?>">Cymbals</a></li>						
							</ul>
						</li>
						<li><a href="<?php echo $app_path . 'catalog?category_id=4'?>">Amps/Effects</a>
							<ul>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=12'?>">Guitar</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=13'?>">Bass</a></li>
								<li><a href="<?php echo $app_path . 'catalog?subcategory_id=14'?>">Pedals</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $app_path . 'catalog?category_id=5'?>">Accessories</a></li>
						<li><a href="<?php echo $app_path . 'guitar_u.php'?>">Guitar University</a></li>
						<li><a href="<?php echo $app_path . 'chord_book.php'?>">Chord Book</a></li>
						<li><a href="<?php echo $app_path . 'blog.php'?>">Blog</a></li>						
					</ul>
				</div>
			</div>
		</div>
