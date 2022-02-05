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


$sql = "SELECT * FROM kabir WHERE first='$userfirst' and password='$pass'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "Login Credentials verified";

}else{
echo "Invalid Login Credentials";
//echo "Invalid Login Credentials";
}

//if (mysqli_query($conn, $sql)) {
  // echo "Welcome to our page";
//} else {
  // echo "Error: " ;
//}

mysqli_close($conn);
?>