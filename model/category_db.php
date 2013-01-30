<?php
function get_categories() {
    global $db;
    $query = 'SELECT *,
                (SELECT COUNT(*)
                 FROM products
                 WHERE products.categoryID = categories.categoryID)
                 AS productCount
              FROM categories
              ORDER BY categoryID';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
      //  display_db_error($error_message);
    	echo $error_message;
    }
}

function get_subcategories() {
    global $db;
    $query = '	SELECT *,
                (SELECT COUNT(*)
                 FROM products
                 WHERE products.categoryID = categories.categoryID) AS productCount,
                (SELECT COUNT(*)
                 FROM products
                 WHERE products.subCategoryID = categories.categoryID)
                 AS productSubCount
              FROM categories
              ORDER BY categoryID';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_subcategories_by_category($category_id) {
    global $db;
    $query = ' SELECT *,
                (SELECT COUNT(*)
                 FROM products
                 WHERE products.categoryID = categories.categoryID) AS productCount,
                (SELECT COUNT(*)
                 FROM products
                 WHERE products.subCategoryID = categories.categoryID)
                 AS productSubCount
              FROM categories
              WHERE parentCategory = :category_id
              ORDER BY categoryID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_category($category_id) {
    global $db;
    $query = '
        SELECT *
        FROM categories
        WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_subcategory($subcategory_id) {
	global $db;
	$query = '
	SELECT s.categoryID, s.categoryName , c.categoryName as parentCategoryName
	FROM categories s
	join categories c on s.parentCategory = c.categoryID
	WHERE s.categoryID =  :subcategory_id';
	
	try {
		$statement = $db->prepare($query);
		$statement->bindValue(':subcategory_id', $subcategory_id);
		$statement->execute();
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		display_db_error($error_message);
	}
}

function add_category($name) {
    global $db;
    $query = 'INSERT INTO categories
                 (categoryName)
              VALUES
                 (:name)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was automatically generated
        $category_id = $db->lastInsertId();
        return $category_id;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function update_category($category_id, $name) {
    global $db;
    $query = '
        UPDATE categories
        SET categoryName = :name
        WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>
