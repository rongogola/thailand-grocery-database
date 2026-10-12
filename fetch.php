<?php

// Include database connection
require_once("DBCONFIG.php");

// SQL query to get records from grocery_items
$sql = "SELECT * FROM grocery_items";

// Prepare and execute query
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch only one record
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Display record using print_r() and <pre> tags
echo "<pre>";
print_r($result);
echo "</pre>";

?>
