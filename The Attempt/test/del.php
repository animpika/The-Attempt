<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahi";

$userfirst = $_POST['fname'];
$pass = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM kabir WHERE first='$userfirst' && password='$pass'";
if (mysqli_query($conn, $sql)) {
    echo "Data deleted";
} else {
    echo "Error";
}

mysqli_close($conn);
?>
