<?php

require_once("database.php");

$id = $_GET['id'];

$sql = "DELETE FROM messages WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

header('Location: index.php');
