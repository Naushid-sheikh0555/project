<?php
session_start();

// 1. Connect to the database
$conn = new mysqli("localhost", "root", "", "event_management");

// 2. Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Handle login form POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // 4. Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // 5. If user found
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // 6. Verify password
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["full_name"] = $user["full_name"];

            // 7. Redirect on success
            echo "<script>alert('Login Successful'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Incorrect password'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Email not found'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
