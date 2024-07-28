<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
   <h2>Login</h2>
    <form action="login.php" method="POST">
        for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><        
        type="submit" value="Login">
    </form>
    
    <p>Don't have an account? <a href="Register here</a>.</p>
    
</body>
</html>

<?php
    session_start();
    
    // Database connection
    $dbHost = "localhost";
    $dbUser = "your_database_username";
    $dbPass = "your_database_password";
    $dbName = "your_database_name";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // Login function
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Check username and password in the database
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            // Successful login
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
        } else {
            echo "Invalid username or password.";
        }
        
        mysqli_close($conn);
    }
?>

