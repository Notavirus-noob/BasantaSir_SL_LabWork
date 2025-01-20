<?php
// Start session
session_start();

// Example hardcoded credentials for demonstration purposes
$valid_userid = 'sujin';
$valid_password = 'password123';

// Retrieve submitted data
$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

// Initialize response array
$response = [
    'status' => 'error',
    'message' => 'Invalid User ID or Password. Please try again.'
];

// Validate credentials
if ($userid === $valid_userid && $password === $valid_password) {
    // Successful login
    $_SESSION['userid'] = $userid; // Start session for the user
    $response['status'] = 'success';
    $response['message'] = "Welcome, $userid!";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
