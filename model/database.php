<?php
// Set up the database connection
$dsn = 'mysql:host=localhost;dbname=gtr_shop';
$username = 'mgs_user';
$password = 'pa55word';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>
