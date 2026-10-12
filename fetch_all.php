<?php

// Include database connection
require_once("DBCONFIG.php");

// SQL query to fetch all records
$sql = "SELECT * FROM grocery_items";

// Prepare and execute query
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all records
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display records using print_r() and <pre> tags
echo "<pre>";
print_r($result);
echo "</pre>";

?>
