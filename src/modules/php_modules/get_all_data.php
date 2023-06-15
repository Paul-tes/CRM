<?php

require_once("connect.php");

// lead data fetch.
$query = "CALL get_all_lead();";
$connection = new connect;
$connection = $connection->getConnection();

$lead_result = $connection->query($query);
if(!$lead_result) die("ERROR: ".mysqli_error($connection));
echo "1 - error".json_encode($lead_result);

// // opportunity data fetch
// $query2 = "CALL get_all_opportunity();";
// $connection = new connect;
// $connection = $connection->getConnection();
// $opportunity_result = mysqli_query($connection, $query);

// $opportunity_result = $connection->query($query2);
// if(!$opportunity_result) die("ERROR".mysqli_error(($connection)));
// echo "3".json_encode($opportunity_result);

// // contact data fetch
// $query3 = "CALL	get_all_contact();";
// $connection = new connect;
// $connection = $connection->getConnection();
// $contact_result = mysqli_query($connection, $query);

// $contact_result = $connection->query(($query3));
// if(!$contact_result) die("ERROR".mysqli_error(($connection)));
// echo "4".json_decode(($contact_result));

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>