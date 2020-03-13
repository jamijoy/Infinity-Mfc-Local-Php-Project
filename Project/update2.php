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
			$nm = $_GET['name'];
			$gd= $_GET['gender'];


?>

<html>
<body>

<h2>Update Your Details Here</h2>

<form action="" method="GET">
  Id:
  <input type="text" name="id" value="<?php echo $_GET['id'];?>">
  <br>
  Name:
  <input type="text" name="name" value="<?php echo $_GET['name'];?>">
  <br> 
  Gender:
  <input type="text" name="gender" value="<?php echo $_GET['gender'];?>">
  <br>
  <input type="submit" name="submit" value="Update"/>
</form> 


</body>
</html>
<?php   
         

					
	        $id = $_GET['id'];	
		    $name =$_GET['name'];
		    $gender =$_GET['gender'];	
			$sql = "Update military SET name = '$name', gender = '$gender' where military_id = '$id'";
			
			if($conn->query($sql)===TRUE)
{
    echo "<font color='green'>successfully Updated Data.<a href='airforce.php'>Check Updated List</a>";
}
else{
    echo "<font color='Red'>Sorry Delete process failed";
	
	$conn->close();
}





?>
			