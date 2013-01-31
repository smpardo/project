<!-- display dynamic for all categories and subcategories
		also dusplay the number of prodcuts for each -->
<?php
require_once('../model/database.php');
require_once('../model/category_db.php');
            
?>

<div id="side_nav">
	<ul id="side_main">
		<?php 
			$categories = get_categories();
			foreach($categories as $category) :
				if ($category['subCategory'] == 0) :
					//only if the category is NOT a subcategory, if it is we ignore
				    $cat_name = $category['categoryName'];
				    $cat_id = $category['categoryID'];
				    $url = $app_path .'catalog?category_id=' . $cat_id;
				    echo '<li><a href="' . $url . '">' . $cat_name . ' (' . $category['productCount'] . ')</a>';
				    //now get a list of the subcategories under the category.
				    //if we have any, create a sub list, output the list items and then close the sub list
				    $subcategories = get_subcategories_by_category($cat_id);
				    if (count($products) !== 0) : 
				    	echo '<ul>';
				        //then we have sub categories to write out				        	
				        foreach($subcategories as $subcategory) :
					    	$subcat_name = $subcategory['categoryName'];
					        $subcat_id = $subcategory['categoryID'];
					        $url = $app_path .'catalog?subcategory_id=' . $subcat_id;
					        echo '<li><a href="' . $url . '">' . $subcat_name . ' (' . $subcategory['productSubCount'] . ')</a></li>';
				        endforeach;
				        echo '</ul>';
				    endif;
					echo '</li>';
				endif;
			endforeach;
			echo '</ul>';
		?>
	</ul>
</div>
