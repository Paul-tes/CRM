<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require("./connect.php");
if (isset($_POST['submit'])) {
    if (isset($_POST["check-admin"])) {
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $query = "CALL login_admin('$email','$password');";
        $connection = new connect;
        $connection = $connection->getConnection();
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['id'] = $result->fetch_assoc()['id'];
            $_SESSION['mode'] = "admin";
            header("Location: ../../index.php");
        } else {
            // if ($email != "") {
            //     header("Location: ../template/login.php?error=1&email=$email");
            // } else {         
            //     header("Location: ../template/login.php?error=1");
            // }
        }
    } else {
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $query = "CALL login_agent('$email','$password');";
        $connection = new connect;
        $connection = $connection->getConnection();
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['id'] = $result->fetch_assoc()['id'];
            $_SESSION['mode'] = "agent";
            header("Location: ../../index.php");
        } else {
            // if ($email != "") {
            //     header("Location: ../template/login.php?error=1&email=$email");
            // } else {
            //     header("Location: ../template/login.php?error=1");
            // }
        }
    }



}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>