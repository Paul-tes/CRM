<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('connect.php');

    $desc = $_POST['desc'];
    $details = $_POST['details'];
    $status = $_POST['status'];
    $contact_role = $_POST['contact-role'];
    $agent_first_name = $_POST['agent-first-name'];
    $agent_last_name = $_POST['agent-last-name'];

    // sanitize input values to prevent SQL injection attacks
    $connection = new connect;
    $connection = $connection->getConnection();

    $desc = mysqli_real_escape_string($connection, $desc);
    $details = mysqli_real_escape_string($connection, $details);
    $contact_role = mysqli_real_escape_string($connection, $contact_role);
    $agent_first_name = mysqli_real_escape_string($connection, $agent_first_name);
    $agent_last_name = mysqli_real_escape_string($connection, $agent_last_name);

    // call the stored procedure and pass input values as parameters
    $query = "CALL create_opportunity('$desc', '$details', '$status', '$contact_role', '$agent_first_name', '$agent_last_name')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // redirect to success page
        header('Location: ../../pages/success.html');
        exit;
    } else {
        // redirect to error page
        header('Location: ../../pages/error.html');
        exit;
    }
} else {
    // redirect to error page if form was not submitted
    header('Location: ../../pages/error.html');
    exit;
}