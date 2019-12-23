<?php
error_reporting(0);
$servername = "dbinsta.cd0clzgzuh1o.ap-south-1.rds.amazonaws.com";
$username = "master";
$password = "saurabh101";
$dbname = "student";
// Create connection
$conn = new MySQLi($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "ID: " . $row["sif"]. " - Name: " . $row["sname"]."<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>