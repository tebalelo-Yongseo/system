<?php
// Assuming you have established a database connection

if (isset($_POST['update_order'])) {
    $order_id = $_POST['order_id'];
    $new_status = $_POST['new_status'];

    // Prepare and execute the SQL update statement
    $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_status, $order_id);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Order updated successfully";
    } else {
        echo "Failed to update order";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Order</title>
</head>
<body>
    <h1>Update Order</h1>
    <form method="POST" action="">
        <label for="order_id">Order ID:</label>
        <input type="text" name="order_id" required><br>
        <label for="new_status">New Status:</label>
</html>

