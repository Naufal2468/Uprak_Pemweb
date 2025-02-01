<?php
$servername = "localhost"; // atau IP server database
$username = "root";        // username database
$password = "";            // password database
$dbname = "dbpegawai";       // nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
