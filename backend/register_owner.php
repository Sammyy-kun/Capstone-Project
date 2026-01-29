<?php
require_once "db.php";
require_once "send_email.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $business_name = trim($_POST['business_name']);

    // ===== NAME VALIDATION (NO NUMBERS) =====
    if (!preg_match("/^[a-zA-Z\s]+$/", $full_name)) {
        die("Invalid name: numbers are not allowed.");
    }

    // ===== EMAIL VALIDATION =====
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email: must contain @ symbol.");
    }

    // ===== PASSWORD VALIDATION =====
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        die("Password must be at least 8 characters long and contain uppercase, lowercase, and a number.");
    }

    // HASH PASSWORD
    $hashed = password_hash($password, PASSWORD_BCRYPT);

    // INSERT INTO DB
    $stmt = $conn->prepare("INSERT INTO users (role, full_name, email, password, business_name) VALUES ('owner', ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $email, $hashed, $business_name);

    if ($stmt->execute()) {
        // SEND EMAIL
        sendEmail($email, "Owner Registration", "<b>Welcome!</b> Your Owner account has been registered.");
        echo "Owner registered successfully!";
    } else {
        echo "Registration failed: Email may already exist.";
    }
}
?>
