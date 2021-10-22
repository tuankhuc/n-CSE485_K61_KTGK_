<?php
    session_start();
    include '../config.php';
    if(isset($_POST['btnLogin'])) {
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPass'];

        $sql = "select * from db_users where user_name = '$username' and user_pass = '$password'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['loginSuccess'] = $username;
            header("Location: ./index.php");
        } else {
            header("Location: ./login.php");
        }
    }


?>