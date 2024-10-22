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
$title = trim($_POST['title']);
$description = trim($_POST['description']);
$username = trim($_POST['username']);
$price = trim($_POST['price']);
$royalties = trim($_POST['royalities']);

// Check for duplicate title or description
$stmt = $conn->prepare("SELECT * FROM items WHERE title = :title OR description = :description");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->execute();
$existingItem = $stmt->fetch(PDO::FETCH_ASSOC);

if ($existingItem) {
    // Item with the same title or description exists
    $_SESSION['error'] = "An item with the same title or description already exists!";
    header('Location: create.php'); // Change to your form page
    exit;
}

// Handle file upload
$file_path = '';
if (isset($_FILES['myfiles']) && !empty($_FILES['myfiles'])) {
    $file = $_FILES['myfiles'][0]; // Assuming a single file upload for simplicity
    $target_dir = "uploads/"; // Ensure this directory exists and is writable
    $file_path = $target_dir . basename($file["name"]);
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($file["tmp_name"], $file_path)) {
        // File uploaded successfully
    } else {
        $_SESSION['error'] = "File upload failed!";
        header('Location: create.php'); // Change to your form page
        exit;
    }
}

// Prepare and execute the statement to insert the new item
$stmt = $conn->prepare("INSERT INTO items (title, description, username, price, royalties, file_path) VALUES (:title, :description, :username, :price, :royalties, :file_path)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':royalties', $royalties);
$stmt->bindParam(':file_path', $file_path);
$stmt->execute();

// Redirect to a success page or the same page with a success message
$_SESSION['success'] = "Item submitted successfully!";
header('Location: create.php'); // Change to your form page
exit;

// Close connection
$conn = null;
?>