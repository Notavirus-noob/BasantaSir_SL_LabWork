<?php
// Database connection
$servername = "localhost";
$username = "root";  // Your database username
$password = "";      // Your database password
$dbname = "user";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username'])) {
    $user = $_POST['username'];
    
    // Query to check if the username exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username is taken.";
    } else {
        echo "Username is available.";
    }

    $stmt->close();
}

$conn->close();
?>
