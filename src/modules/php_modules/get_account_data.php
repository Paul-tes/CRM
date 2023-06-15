<?php

require_once("connect.php");

// account data fetch
$query1 = "CALL get_all_account();;";
$connection = new connect;
$connection = $connection->getConnection();
$account_result = mysqli_query($connection, $query1);

$account_result = $connection->query($query1);
if(!$account_result) die("ERROR: ".mysqli_error(($connection)));
echo "2".json_encode($account_result);
?>