<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ded";

$userroll = $_POST['id'];
$username = $_POST['name'];
$userdept = $_POST['department'];
$cg = $_POST['cgpa'];
$bg = $_POST['bloodgroup'];
$gender = $_POST['gender'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO suffer (id,name,dept,cg,bloodgroup,gender) VALUES ('$userroll', '$username', '$userdept','$cg', '$bg', '$gender')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
