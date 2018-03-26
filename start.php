<!DOCTYPE html>
<html>
<body>

<?php
$servername = "joaquimmysql.mysql.database.azure.com";
$username = "joaquim@joaquimmysql";
$password = "!Passw0rd";
$dbname = "nearcrumbsjuguem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
