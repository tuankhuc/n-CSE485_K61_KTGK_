<?php
include '../partials-front/header.php';
include '../config.php';
?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin bai thi:</h2>
    <form action="./process_add.php" method="post">
        <div class="mb-3 row">
            <label for="emp_id" class="col-sm-2 col-form-label">Mã bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emp_id" name="emp_id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_exam_title" class="col-sm-2 col-form-label">Tên bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emp_exam_title" name="emp_exam_title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_exam_datetime" class="col-sm-2 col-form-label">Ngày thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emp_exam_datetime" name="exam_datetime">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_duration" class="col-sm-2 col-form-label">Thời gian làm bài: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="emp_duration" name="emp_duration">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_total_question" class="col-sm-2 col-form-label">Số câu hỏi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="emp_total_question" id="emp_total_question">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_marks_per_right_answer" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="emp_marks_per_right_answer" id="emp_marks_per_right_answer">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_created_on" class="col-sm-2 col-form-label">, Ngày tạo bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="emp_created_on" id="emp_created_on">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_status" class="col-sm-2 col-form-label">, Trạng thái: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="emp_status" id="emp_status">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="emp_exam_code" class="col-sm-2 col-form-label">, Mã truy cập bài thi: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="emp_exam_code" id="emp_exam_code">
                
            </div>
        </div>
        <div class="mb-3 row">
            <button type="submit" class="btn btn-success">Thêm</button>
        </div>
    </form>
</main>

<?php
include '../partials-front/footer.php';
?>