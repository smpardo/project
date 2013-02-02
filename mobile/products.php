<?php
require_once('../util/main.php');
require_once('../model/product_db.php');
require_once('../model/category_db.php');

if (isset($_GET['category_id'])) {
    $action = 'category';
} elseif (isset($_GET['subcategory_id'])) {
	$action = 'subcategory';
} elseif (isset($_GET['product_id'])) {
    $action = 'product';
}

switch ($action) {
    // Display the specified category
    case 'category':
        // Get category data
        $category_id = intval($_GET['category_id']);
        $category = get_category($category_id);
        $category_name = $category['categoryName'];
        $products = get_products_by_category($category_id);

        // Display category
        include('./category_view.php');
        break;
        
    // Display the specified subcategory
    case 'subcategory':
       	// Get subcategory data
        $subcategory_id = intval($_GET['subcategory_id']);
        $subcategory = get_subcategory($subcategory_id);
        $subcategory_name = $subcategory['categoryName'];
        $category_name = $subcategory['parentCategoryName'];
        $products = get_products_by_subcategory($subcategory_id);
     
        // Display category
        include('./category_view.php');
        break;
        
        
        // Display the specified product
    case 'product':
        // Get product data
        $product_id = $_GET['product_id'];
        $product = get_product($product_id);

        // Display product
        include('./product_view.php');
        break;
    default:
        $error = 'Unknown catalog action: ' . $action;
        include('errors/error.php');
        break;
}
?>