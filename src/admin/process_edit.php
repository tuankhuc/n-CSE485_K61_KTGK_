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

    if(isset($_POST['btnLuu'])) {


        echo $emp_id."<br>";
        echo $emp_exam_title."<br>";
        echo $emp_exam_datetime."<br>";
        echo $emp_duration."<br>";
        echo $emp_total_question."<br>";
        echo  $emp_marks_per_right_answer."<br>";
        echo $emp_created_on."<br>";
        echo $emp_status."<br>";
        echo $emp_exam_code ."<br>";
    }

    mysqli_close($con);
?>