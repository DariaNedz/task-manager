<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];
$task = $_POST['task'];

$sql = "INSERT INTO tasks (user_id, task) VALUES (?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $task);
$stmt->execute();

header("Location: dashboard.php");