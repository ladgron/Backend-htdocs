<?php

require_once("database.php");

$id = $_GET['message_id'];

$sql = "DELETE FROM messages WHERE message_id = :message_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':message_id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

header('Location: index.php');
?>
