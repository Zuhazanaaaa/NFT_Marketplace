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
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

// Error flag
$error = false;

// Check for duplicate username
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $_SESSION['error'] = "Username already exists!";
    $error = true;
}

// Check for duplicate email
$stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $_SESSION['error'] = "Email already exists!";
    $error = true;
}

// Validate inputs
if ($password !== $confirm_password) {
    $_SESSION['error'] = "Passwords do not match!";
    $error = true;
}

// If there are errors, redirect back to registration.php
if ($error) {
    header('Location: registration.php');
    exit;
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute the statement
try {
    $stmt = $conn ->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->execute();
    
    // Redirect to login.php on successful registration
    header('Location: login.php');
    exit;
} catch(PDOException $e) {
    $_SESSION['error'] = "Error: " . $e->getMessage();
    header('Location: registration.php');
    exit;
}

// Close connection
$conn = null;
?>