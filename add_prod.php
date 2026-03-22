<?php
$pname = $_POST['pname'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$category = $_POST['category'];

echo "<h2>Product Added Successfully</h2>";
echo "<p><strong>Product:</strong> $pname</p>";
echo "<p><strong>Price:</strong> ₹$price</p>";
echo "<p><strong>Quantity:</strong> $qty</p>";
echo "<p><strong>Category:</strong> $category</p>";
?>
