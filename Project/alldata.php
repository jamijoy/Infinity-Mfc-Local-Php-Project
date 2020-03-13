<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="index.html" title="">Home</a></li>

<h2>The List Of Soldier After Insert The data</h2>
	
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
			$sql = "SELECT * FROM military";
			
			$result = $conn->query($sql);
		    
		
			
			echo "<table border='2' width='956px'>";
			
			 echo "<tr>
				<th align=>military_id</th>
				<th>rank_id</th>
				<th>branch_code</th>
				<th>mission_code</th>
				<th>name</th>
				<th>age</th>
				<th>adress</th>
				<th>gender</th>
			  </tr>";

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					 echo "<tr>". 
					 "<td>". $row["military_id"]. "</td>". 
					 "<td>". $row["rank_id"]. "</td>". 
					 "<td>". $row["branch_code"]. "</td>".  
					 "<td>". $row["mission_code"]. "</td>".  
					 "<td>". $row["name"]. "</td>".  
					 "<td>". $row["age"]. "</td>".  
					 "<td>". $row["adress"]. "</td>".  
					 "<td>". $row["gender"]. "</td>".  
					 
					 "</tr>";
					 
				}
			} else {
				echo "0 results";
			}
			
			echo "</table>";
			
			?>
</body>
</html>
