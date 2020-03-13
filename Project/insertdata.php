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

   $b=$_POST["rank"];
   $c=$_POST["branch"];
   $d=$_POST["mission"];
    $e=$_POST["name"];
    $f=$_POST["age"];
    $g=$_POST["adress"];
    $h=$_POST["gender"];
	
$sql="INSERT INTO military(`military_id`, `rank_id`, `branch_code`, `mission_code`, `name`, `age`,`adress`,`gender`) VALUES ('','$b','$c','$d','$e','$f','$g','$h')";

if($conn->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: alldata.php');
}
else{
    echo "somthing is wrong";
}

$conn->close();
?> 