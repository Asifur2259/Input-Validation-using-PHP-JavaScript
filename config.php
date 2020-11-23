<?php
$servername = "localhost";
$database = "User";
$username = "root";
$password = "";

 if(isset($_POST['submit'])){
	$UserNameField = $_POST['user'];
	$EmailNameField = $_POST['emails'];
	$MobileNameField = $_POST['mobileNumber'];
	$PasswordNameField = md5($_POST['pass']);


$conn = mysqli_connect($servername, $username, $password, $database);
 
$sql = "INSERT INTO person (username, email, mobile, pass) VALUES ('$UserNameField', '$EmailNameField', '$MobileNameField', '$PasswordNameField')";
if (mysqli_query($conn, $sql)) {
      echo "";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 }

?>