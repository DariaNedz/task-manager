<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: dashboard.php");