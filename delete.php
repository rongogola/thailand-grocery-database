<?php

// Include database connection
require_once("DBCONFIG.php");

// SQL query to delete a record
$sql = "DELETE FROM grocery_items WHERE item_id = 106";

// Execute deletion
$pdo->exec($sql);

// Display success message
echo "Record deleted successfully!";

?>
