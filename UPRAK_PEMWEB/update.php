<?php
include 'db.php';

if (isset($_GET['NIP'])) {
    $NIP= $_GET['NIP'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $Jabatan= $_POST['Jabatan'];

    $sql = "UPDATE users SET nama='$nama', email='$email', Jabatan='$Jabatan' WHERE id=$NIP";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post" action="update.php?id=<?php echo $NIP; ?>">
    Nama: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
    Jabatan: <input type="text" name="Jabatan" value="<?php echo $user['Jabatan']; ?>"><br>
    <input type="submit" value="Update">
</form>
