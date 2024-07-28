<?php
if (isset($_POST['update_menu'])) {
    $menu_id = $_POST['menu_id'];
    $new_name = $_POST['new'];    
    $new_price = $_POST['new_price'];

    // Prepare and execute the SQL update statement
    $sql = "UPDATE menu SET name = ?, price = ? WHERE menu_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $new_name, $new_price, $menu_id);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Menu updated successfully";
    } else {
        echo "Failed to update menu";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Menu</title>
</head>
<body>
    <h1>Update Menu</h1>
    <form method="POST" action="">
        <label for="menu_id">Menu ID:</label>
        <input type="text" name="menu_id" required>
        <label for="new_name">New Name:</label>
        <input type="text" name="new_name" required>
        for="new_price">New Price:</label>
        <input type="text" name="new_price" required><br>
        <input type="submit" name="update_menu" value="Update Menu">
    </form>
</body>
</html>


