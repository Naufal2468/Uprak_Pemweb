<?php
include 'db.php';

if (isset($_GET['NIP'])) {
    $id = $_GET['NIP'];

    $sql = "DELETE FROM users WHERE id=$NIP";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
