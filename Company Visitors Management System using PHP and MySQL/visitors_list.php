<?php
require 'config.php';

$sql = "SELECT id, name, email, phone, visit_date, visit_time, purpose, created_at FROM visitors ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitors List</title>
</head>
<body>
    <h2>List of Visitors</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date of Visit</th>
            <th>Time of Visit</th>
            <th>Purpose</th>
            <th>Registration Time</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["phone"]. "</td>
                        <td>" . $row["visit_date"]. "</td>
                        <td>" . $row["visit_time"]. "</td>
                        <td>" . $row["purpose"]. "</td>
                        <td>" . $row["created_at"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No visitors found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
