<?php
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lasrname'];
$Address=$_POST['Address'];
$email=$_POST['Email'];
$Password=$_POST['Password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ex
VALUES ('$Firstname', '$Lastname', '$Address', '$Email', '$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>