<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('connect.php');

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $details = $_POST['details'];

    // sanitize input values to prevent SQL injection attacks
    $connection = new connect;
    $connection = $connection->getConnection();

    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $phone = mysqli_real_escape_string($connection, $phone);
    $email = mysqli_real_escape_string($connection, $email);
    $address = mysqli_real_escape_string($connection, $address);
    $details = mysqli_real_escape_string($connection, $details);

    // call the stored procedure and pass input values as parameters
    $query = "CALL create_contact('$first_name', '$last_name', '$phone', '$email', '$address', '$details')";
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