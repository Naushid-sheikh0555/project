<?php
session_start();

// 1. Connect to MySQL
$conn = new mysqli("localhost", "root", "", "event_management");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get POST data
$email = $_POST["email"];
$password = $_POST["password"];

// 3. Query user by email
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// 4. Check if user found
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // 5. Verify password
    if (password_verify($password, $user["password"])) {
        // 6. Store user info in session
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["first_name"] = $user["first_name"];
        $_SESSION["last_name"] = $user["last_name"];
        $_SESSION["show_welcome"] = true; // ✅ Flag to show alert once

        // ✅ Safe redirect with no JS
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Incorrect password'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Email not found'); window.history.back();</script>";
}

$conn->close();
?>
