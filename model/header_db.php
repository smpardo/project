<?php

function get_quote_from_db($quote_id) {
    global $db;
    $query = '
        SELECT *
        FROM quotes
        WHERE quoteID = :quote_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':quote_id', $quote_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_quote_count() {
	global $db;
	$query = '
		SELECT Count(*) as num
		FROM quotes';
	try {
		$statement = $db->prepare($query);
		$statement->execute();
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		display_db_error($error_message);
	}
}

function get_quote() {
	//first get the total number of quotes in the database
	$quote_count = get_quote_count();
	//then get a random number between 1 and the # of quotes
	$quote_id = mt_rand(1, $quote_count[0][num]);
	//now grab the quote from the db and send it to the caller
	$quote = get_quote_from_db($quote_id);
	
	return $quote;
}

?>