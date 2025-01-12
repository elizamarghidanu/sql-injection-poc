<?php
// DB connection
$servername = "localhost";
$username = "root"; //Default MySQL username
$password = ""; //Default MySQL password
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SQL query with prepared statement
$user_input = $_GET['username'];
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $user_input); //Bind the user input to the prepared statement
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}
$stmt->close();
$conn->close();
?>
