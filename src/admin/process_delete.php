<?php
    include '../config.php';
    $emp_id = $_GET['id'];
    $sql = "delete from luu_tru_thong_tin_bai_thi where emp_id = '$emp_id'";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>