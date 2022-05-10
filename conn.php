 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jevgenijsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . '<br>';

// Create database
// $sql = "CREATE DATABASE jevgenijsDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $sql = "CREATE TABLE DRINKS (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   DRINK VARCHAR(30) NOT NULL,
//   ALCOHOL_TYPE VARCHAR(30) NOT NULL,
//   DEGREE VARCHAR(50),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )
// ";

// if ($conn->query($sql) === TRUE) {
//   echo "Table jevgenijsDB created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$sql = "INSERT INTO DRINKS (DRINK, ALCOHOL_TYPE, DEGREE)
VALUES ('WHISKEY', 'DELICIOUS', '43');";
$sql .= "INSERT INTO DRINKS (DRINK, ALCOHOL_TYPE, DEGREE)
VALUES ('LEMON', 'VODKA', '40');";
$sql .= "INSERT INTO DRINKS (DRINK, ALCOHOL_TYPE, DEGREE)
VALUES ('COLA', 'ABSCENT', '75');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>