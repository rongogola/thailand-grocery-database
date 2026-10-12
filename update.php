<?php

// Include database connection
require_once("DBCONFIG.php");

// SQL query to update a record
$sql = "UPDATE grocery_items
SET price_baht = 150.00
WHERE item_id = 1";

// Execute update query
$pdo->exec($sql);

// Display success message
echo "Record updated successfully!";

?>
