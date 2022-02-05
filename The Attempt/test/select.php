<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex";

//$userfirst = $_POST['fname'];
//$userlast = $_POST['lname'];
//$email = $_POST['email'];
//$pass = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM form";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
	
{
	
	 echo"1st name:".$row['first']."<br>Last name:".$row['last']. "<br>Email:".$row['email']. "<br>Password:" .$row['password']. "<br>";
	  ;
}

mysqli_close($conn);
?>