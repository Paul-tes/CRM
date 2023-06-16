<?php
// Retrieve form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$password = $_POST['passowrd'];
$confirm_password = $_POST['confirm-passowrd'];

require_once('connect.php');
// Validate form data
if ($password !== $confirm_password) {
  echo "Error: Passwords do not match";
  exit();
}

// Connect to MySQL database
$connection = new connect;
$connection = $connection->getConnection();

// Call stored procedure to create agent
$sql = "CALL create_agent('$email', '$first_name', '$last_name', '$password', 'None', 'None');";
if (mysqli_query($connection, $sql)) {
  header('Location: ../../pages/success.html');
} else {
  header('Location: ../../pages/error.html');
}

mysqli_close($connection);
?>