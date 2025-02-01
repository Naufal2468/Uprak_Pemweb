<?php
include 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Users List</h2>";
echo "<table border='1'>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['NIP'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['Jabatan'] . "</td>
            <td>
                <a href='update.php?id=" . $row['NIP'] . "'>Edit</a> | 
                <a href='delete.php?id=" . $row['NIP'] . "'>Delete</a>
            </td>
          </tr>";
}

echo "</table>";
?>
