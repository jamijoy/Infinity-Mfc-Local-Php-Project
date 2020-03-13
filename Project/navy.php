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

<h2>The List Of Navy Soldier</h2>
	
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
			$sql = "SELECT military.military_id,military.name, military.gender FROM military,branch WHERE military.branch_code =branch.branch_code AND branch.branch_of_service = 'Navy'";
			
			$result = $conn->query($sql);
		    
		
			
			echo "<table border='2' width='956px'>";
			
			 echo "<tr>
				<th align=>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Update Here</th>
				<th>Delete Here</th>
			  </tr>";

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					 echo "<tr>". 
					 "<td>". $row["military_id"]. "</td>". 
					 "<td>". $row["name"]. "</td>". 
					 "<td>". $row["gender"]. "</td>".  
					 "<td> <a href = 'update1.php?id=$row[military_id]&name=$row[name]&gender=$row[gender]'>". "Edit" ."</a> </td>".
                     "<td> <a href = 'delete.php?id=$row[military_id]&viewData=2'>". "Delete" ."</a> </td>".
					 
					 "</tr>";
					 
				}
			} else {
				echo "0 results";
			}
			
			echo "</table>";
			
			?>
</body>
</html>
