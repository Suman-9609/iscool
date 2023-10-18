<?php


if (isset($_POST['loginSubmit'])) {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'php_test');
    $query = "SELECT * FROM admin";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {

            if ($user === $row['user'] && $pass === $row['password']) {
                $_SESSION['log'] = $row['id'];
                header("Location: admin.php");
            } else {
                $_SESSION['error'] = "User name and password is wrong";
                header("Location: login.php");
                return;
            }
        }
    }
}
