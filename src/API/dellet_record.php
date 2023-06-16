<?php
require_once("../modules/php_modules/connect.php");
// Get the DELETE request parameters
$table = $_GET['table'];
$id = $_GET['id'];

$connection = new connect;
$connection = $connection->getConnection();

// Construct the DELETE query
$sql = "DELETE FROM " . $table . " WHERE id = " . $id;

// Execute the DELETE query
if (mysqli_query($connection, $sql)) {
  
  // Return a success message
  $response = array('status' => 'success', 'message' => 'Record deleted successfully');
  header('Content-Type: application/json');
  echo json_encode($response);
} else {
  // If the DELETE query fails, return an error message
  $response = array('status' => 'error', 'message' => 'Error deleting record: ' . mysqli_error($connection));
  header('Content-Type: application/json');
  echo json_encode($response);
}

// Close the database connection
mysqli_close($connection);  
?>