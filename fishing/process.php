// ONLY FOR EDUCATIONAL PURPOSES
// ТІЛЬКИ ДЛЯ НАВЧАЛЬНИХ ЦІЛЕЙ

// ВИКОРИСТАННЯ ЗАБОРОНЕНО
// USING DON'T ALLOWED

<?php
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the 'test' table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sqlCreateTable);

// Insert data into the 'test' table
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

$sqlInsertData = "INSERT INTO test (username, password) VALUES ('$username', '$password')";
$conn->query($sqlInsertData);

$conn->close();
?>
