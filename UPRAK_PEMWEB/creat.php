<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nama = $_POST['nama'];
    $email = $_POST['email'];
    $Jabatan= $_POST['Jabatan'];

    $sql = "INSERT INTO users (nama, email, Jabatan) VALUES ('$nama', '$email', '$Jabatan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="create.php">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="email" name="email"><br>
    Jabatan: <input type="text" name="Jabatan"><br>
    <input type="submit" value="Create">
</form>
