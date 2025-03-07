<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["errors" => ["Invalid request method."]]);
    exit;
}


$errors = [];
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$message = trim($_POST["message"] ?? "");


if (empty($name)) $errors[] = "Name is required.";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
if (empty($phone)) $errors[] = "Phone number is required.";
if (empty($message)) $errors[] = "Message cannot be empty.";

if (!empty($errors)) {
    echo json_encode(["errors" => $errors]);
    exit;
}


echo json_encode(["message" => "Your message has been sent successfully!"]);
exit;
?>
