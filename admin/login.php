<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM users WHERE username = ? AND password = ?';
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['username'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['password'], PDO::PARAM_STR);
$stmt->execute();



$stmt = null;
?>