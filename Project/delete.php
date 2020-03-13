<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "military_base_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$mid = $_GET['id'];
$view = $_GET['viewData'];

$sql = "Delete From military where military_id='$mid'";
			
	if($conn->query($sql)===TRUE)
	{
		if($view == 1)
		{
			header("location: army.php");
		}
		else if($view == 2)
		{
			header("location: navy.php");
		}
		else if($view == 3)
		{
			header("location: airforce.php");
		}
	}
	else{
		echo "<font color='Red'>Sorry Delete process failed";
	}

$conn->close();

?>