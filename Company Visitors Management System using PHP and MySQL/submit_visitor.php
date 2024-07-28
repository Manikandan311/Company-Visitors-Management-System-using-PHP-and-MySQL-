<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $visit_date = $conn->real_escape_string($_POST['visit_date']);
    $visit_time = $conn->real_escape_string($_POST['visit_time']);
    $purpose = $conn->real_escape_string($_POST['purpose']);

    $sql = "INSERT INTO visitors (name, email, phone, visit_date, visit_time, purpose)
            VALUES ('$name', '$email', '$phone', '$visit_date', '$visit_time', '$purpose')";

    if ($conn->query($sql) === TRUE) {
        echo "New visitor registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
