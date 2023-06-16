
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('./connect.php');

    $first_name = $_POST['agent-first-name'];
    $last_name = $_POST['agent-last-name'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    // sanitize input values to prevent SQL injection attacks
    $connection = new connect;
    $connection = $connection->getConnection();
    
    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $address = mysqli_real_escape_string($connection, $address);
    $status = mysqli_real_escape_string($connection, $status);

    // call the stored procedure and pass input values as parameters
    $query = "CALL create_account('$first_name', '$last_name', '$address', '$status')";
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