<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM student WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>    
<?php 
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
function_alert("амжилттай устгасан"); 
?> 
