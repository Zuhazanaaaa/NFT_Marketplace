<?php
// Start session
session_start();

// Database connection settings
$host = 'localhost:3307'; 
$dbname = 'liberty_nft_market';
$username_db = 'root';
$password_db = '';

// Creating connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get form data
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Prepare and execute the statement to find the user
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if user exists
if ($user) {
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Password is correct, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Redirect to author.php on successful login
        header('Location: author.php');
        exit;
    } else {
        // Incorrect password
        $_SESSION['error'] = "Incorrect password!";
        header('Location: login.php');
        exit;
    }
} else {
    // User not found
    $_SESSION['error'] = "Username does not exist!";
    header('Location: login.php');
    exit;
}

// Close connection
$conn = null;
?>