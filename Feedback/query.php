<?php
include"connect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT max(items) FROM vote";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Tommorow's dish : " . $row["max(items)"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
<style>
  body{
       background-color:Lightblue;
       padding:15em 30em;
       font-size:19px;
  }
</style>
</html>
