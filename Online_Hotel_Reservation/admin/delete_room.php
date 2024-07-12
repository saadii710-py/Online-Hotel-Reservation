<?php
    require_once 'connect.php';
    $connection = new mysqli("localhost", "root", "", "db_hor");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $room_id = $_REQUEST['room_id'];
    $stmt = $connection->prepare("DELETE FROM `room` WHERE `room_id` = ?");
    $stmt->bind_param("s", $room_id);
    $stmt->execute();
    if ($stmt->error) {
        die("Error: " . $stmt->error);
    }
    $stmt->close();
    $connection->close();
    
    header("location: room.php");
?>
