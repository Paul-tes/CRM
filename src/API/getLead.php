<?php

// Define database connection constants
require_once("../modules/php_modules/connect.php");

$query = "CALL get_all_lead()";
$connection = new connect;
$connection = $connection->getConnection();

$result = $connection->query($query);
if (!$result) {
    die("Error executing stored procedure: " . $connection->error);
}

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$json = json_encode($data);
header('Content-Type: application/json');
echo $json;

// Close the database connection
$connection->close();

?>