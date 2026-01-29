<?php
session_start();
require "../config/database.php";
require "../models/User.php";

$db = (new Database())->connect();
$user = new User($db);

$email = $_POST['email'];
$password = hash("sha256",$_POST['password']);

$data = $user->login($email);

if (!$data) exit("INVALID");
if ($data['password'] !== $password) exit("INVALID");
if ($data['is_verified'] == 0) exit("NOT_VERIFIED");

$_SESSION['user_id'] = $data['id'];
$_SESSION['role'] = $data['role'];

exit("LOGIN_" . strtoupper($data['role']));
?>
