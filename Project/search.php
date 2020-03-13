<li class="current"><a class="smoothscroll" href="mission.html" title="">Back To Search</a></li>
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
$a=$_POST["Name"];
$b=$_POST["Country"];
$c=$_POST["Age"];

$sql = "SELECT military.name,mission.assigned_country,mission.mission_code,military.age FROM military,mission where military.mission_code = mission.mission_code
 AND military.name='$a' AND military.mission_code= '$b' AND military.age='$c'";



$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "Name: " .$row['name'].  "<br/>    Country :" .$row['assigned_country']."<br/>   Age :" .$row['age']."<br>";
    }
}
else {
    echo "There is no Army available that you want.";
}
 


$conn->close();
?>