<?php
require_once "db.php";
require_once "send_email.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // NAME VALIDATION — only letters + spaces allowed
    if (!preg_match("/^[a-zA-Z\s]+$/", $full_name)) {
        die("Error: Name cannot contain numbers.");
    }

    // EMAIL VALIDATION
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // PASSWORD VALIDATION (8 chars, upper, lower, number)
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        die("Error: Password must include min 8 chars, uppercase, lowercase, and a number.");
    }

    $hashed = password_hash($password, PASSWORD_BCRYPT);

    // INSERT USER WITH ROLE "user"
    $stmt = $conn->prepare("INSERT INTO users (role, full_name, email, password) VALUES ('user', ?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $hashed);

    if ($stmt->execute()) {
        sendEmail($email, "Registration Successful", "Welcome! Your user account is now active.");
        echo "User registered successfully!";
    } else {
        echo "Error: Email already exists.";
    }
}
?>
