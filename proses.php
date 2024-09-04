<?php

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$name = sanitize_input($_POST['name']);
$email = sanitize_input($_POST['email']);
$message = sanitize_input($_POST['message']);

$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "contact_db";     

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {

    echo "Thank you for contacting us!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
