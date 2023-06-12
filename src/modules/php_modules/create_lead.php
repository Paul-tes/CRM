<?php

require("./connect.php");
if (isset($_POST['submit'])) {
    $first_name = test_input($_POST['first-name']);
    $last_name = test_input($_POST['last-name']);
    $company = test_input($_POST['company']);
    $job_title = test_input($_POST['job-title']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $comment = test_input($_POST['comment']);
    $query = "CALL create_lead('$first_name','$last_name','$company','$job_title','$phone','$email','$comment');";
    $connection = new connect;
    $connection = $connection->getConnection();
    $result = mysqli_query($connection, $query);
    if ($result == true) {
        header("Location: ../../pages/sales.php?lead-created=1");
    } else {
        header("Location: ../../pages/sales.php?error=1");
    }
} else {
    header("Location: ../../pages/sales.php?error=2");
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}