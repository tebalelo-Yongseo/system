<?php
session_start();

// Check if customer is logged in, redirect to login page if not
if (!isset($_SESSION['customer_logged_in']) || $_SESSION['customer_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Place Order functionality
if (isset($_POST['place_order'])) {
    // Add your code to process the order and save it to the database
    echo "Order placed successfully!";
}

// Schedule Delivery functionality
if (isset($_POST['schedule_delivery'])) {
    // Add your code to schedule the delivery and save it to the database
    echo "Delivery scheduled successfully!";
}

// Track Order functionality
if (isset($_POST['track_order'])) {
    // Add your code to fetch and display the order status from the database
    echo "Order is being processed!";
}
?>
<!DOCTYPE html>
<html>
<input type="Track Order" value="Track Order">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>



<?php
session_start();

// Check if bakery owner is logged in, redirect to login page if not
if (!isset($_SESSION['owner_logged_in']) || $_SESSION['owner_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Manage Orders functionality
if (isset($_POST['manage_orders'])) {
    // Add your code to fetch and display the orders from the database
    echo "Manage Orders page";
}

// Manage Deliveries functionality
if (isset($_POST['manage_deliveries'])) {
    // Add your code to fetch and display the deliveries from the database
    echo "Manage Deliveries page";
}

// Update Menu functionality
if (isset($_POST['update_menu'])) {
    // Add your code to update the menu and save it to the database
    echo "Menu updated successfully!";
}

// Manage Prices functionality
if (isset($_POST['manage_prices'])) {
    // Add your code to manage the prices and save them to the database
    echo "Prices managed successfully!";
}

// Manage Discounts functionality
if (isset($_POST['manage_discounts'])) {
    // Add your code to manage the discounts and save them to the database
    echo "Discounts managed successfully!";
}

// Manage Inventory functionality
if (isset($_POST['manage_inventory'])) {
    // Add your code to manage the inventory and update the stock in the database
    echo "Inventory managed successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Bakery Owner Dashboard</title>
</head>
<body>
    <h1>Welcome, Bakery Owner!</h1>
    <form method="POST" action="">
        <input type="submit" name="manage_orders" value="Manage Orders">
        <input type="submit" name="manage_deliveries" value="Manage Deliveries">
        <input type="submit" name="update_menu" value="Update Menu">
        <input type="submit" name="manage_prices" value="Manage Prices">
        <input type="submit" name="manage_discounts" value="Manage Discounts">
        <input type="submit" name="manage_inventory" value="Manage Inventory">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>

<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>
