<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
   2>Create a New Account</h2>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
      ="password" name="password" required><br><br>
        
        <label for="role">User Role:</label>
        <select name="role">
            <option value="Admin</option>
            <option value="user">User</option>
        </select><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>


<?php
    // Database connection
    $dbHost = "localhost";
    $dbUser = "your_database_username";
    $dbPass = "your_database_password";
    $dbName = "your_database_name";
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    // Register function
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ $_POST["role"];
        
        // Check if username already exists
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists. Please choose a different one.";
        } else {
            // Insert new user into database
            $sql = "INSERT INTO users (username, password, VALUES ('$username', '$password', '$role')";
            if (mysqli_query($conn, $sql)) {
                echo "Registration successful. You can now login with your credentials.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        
        mysqli_close($conn);
    }
?>
