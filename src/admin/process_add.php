<?php
    include '../config.php';

    $emp_id = $_POST['empid'];
    $emp_exam_title = $_POST['empexam_title'];
    $emp_exam_datetime = $_POST['exam_datetime'];
    $emp_duration = $_POST['duration'];
    $emp_total_question = $_POST['total_question'];
    $emp_marks_per_right_answer = $_POST['marks_per_right_answer'];
    $emp_created_on = $_POST['created_on'];
    $emp_status = $_POST['status'];
    $emp_exam_code = $_POST['exam_code'];
    $sql = "insert into luu_tru_thong_tin_bai_thi(emp_id,emp_exam_title,emp_exam_datetime,emp_duration,emp_total_question,emp_marks_per_right_answer,emp_created_on,emp_status,emp_exam_code)
            values('$emp_id', '$emp_exam_title', '$emp_exam_datetime', '$emp_duration', ' $emp_total_question ','$emp_marks_per_right_answer','$emp_created_on','$emp_status',' $emp_exam_code')";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header('Location: index.php');
    } else {
        echo 'Lỗi.';
    }

    mysqli_close($con);
?>