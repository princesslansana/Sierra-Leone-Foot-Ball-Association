<?php
require "../config.php";
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM users WHERE user_id=?");
$stmt->execute([$id]);
header("Location: index.php");
?>
