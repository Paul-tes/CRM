<?php

require_once("connect.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = " CALL `search_lead`('$search')";
    $connection = new connect;
    $connection = $connection->getConnection();
    $lead_result = mysqli_query($connection, $query);
}


// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }