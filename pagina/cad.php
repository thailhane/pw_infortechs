<?php
$servername = "localhost";
$database = "ccads";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($localhost, $root, $ccads);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO Students (nome, sobrenome, email, sexo, senha) VALUES ('Test', 'Testing', 'Testing@tesing.com', 'masculino', 'zzzaaakkk')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>