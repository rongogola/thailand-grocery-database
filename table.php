<?php

// Include database connection
require_once("DBCONFIG.php");

// SQL query to get all records
$sql = "SELECT * FROM grocery_items";

// Prepare and execute query
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all records
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2>Grocery Items</h2>

<table>
    <tr>
        <th>Item ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Brand Name</th>
        <th>Price (Baht)</th>
    </tr>

    <?php foreach ($result as $row): ?>
    <tr>
        <td><?php echo $row['item_id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['brand_name']; ?></td>
        <td><?php echo $row['price_baht']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
