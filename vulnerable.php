<?php
// DB connection
$servername = "localhost";
$username = "root"; //Default MySQL username
$password = ""; //Default MySQL password
$dbname = "test_db";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SQL query with potential vulnerability
$user_input = $_GET['username'];
$sql = "SELECT * FROM users WHERE username = '$user_input'"; //vulnerable query
$result = $conn->query($sql);

//Display result
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
