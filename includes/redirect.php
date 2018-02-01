<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curriculum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contacts (contact_name, contact_email, contact_subject_message, contact_message)
VALUES ('$name', '$email', '$subject', '$message')";

$conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("location: ../index.php");

?>
