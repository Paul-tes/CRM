<?php

require("connect.php");

$query = "CALL get_all_lead();";
$connection = new connect;
$connection = $connection->getConnection();

$lead_result = $connection->query($query);
if(!$lead_result) die("ERROR: ".mysqli_error($connection));
echo "1".json_encode($lead_result);
// $query = "CALL get_all_account();";
// $connection = new connect;
// $connection = $connection->getConnection();
// $result = mysqli_query($connection, $query);

// $query = "CALL get_all_opportunity();";
// $connection = new connect;
// $connection = $connection->getConnection();
// $result = mysqli_query($connection, $query);
// migerem nw 


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}