<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfect";

$userfirst = $_POST['fname'];
$userlast = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tab (first,last,email,password) VALUES ('$userfirst', '$userlast', '$email','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
