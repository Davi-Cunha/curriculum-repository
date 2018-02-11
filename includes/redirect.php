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

$conn->close();

mail("davipccunhasilva@hotmail.com", "Thank you sending me this email", "That's was awesome!", "From: $email");

header("location: ../index.php");

?>
