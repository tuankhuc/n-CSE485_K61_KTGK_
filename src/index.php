<?php
    include './partials-front/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-3">lưu trữ thông tin Bài thi </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Tên bài thi</th>
                <th scope="col"> Ngày thi</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col"> Số câu hỏi</th>
                <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
                <th scope="col">Ngày tạo bài thi</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Mã truy cập bài thi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Tạo kết nối SQL
                include './config.php';

                // Thực hiện truy vấn
                $sql = 'select e.emp_id, e.emp_exam_title, e.emp_exam_datetime, e.emp_duration, e.emp_total_question,e.emp_marks_per_right_answer, e.emp_created_on, e.emp_status, e.emp_exam_code from luu_tru_thong_tin_bai_thi' ;
                $result = mysqli_query($con, $sql);

                // Xử lí kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>',
                            '<th scope="row">'.$row['emp_id'].'</th>',
                            '<td>'.$row['emp_exam_title'].'</td>',
                            '<td>'.$row['emp_exam_datetime'].'</td>',
                            '<td>'.$row['emp_duration'].'</td>',
                            '<td>'.$row['emp_total_question'].'</td>',
                            '<td>'.$row['marks_per_right_answer'].'</td>',
                            '<td>'.$row['created_on'].'</td>',
                            '<td>'.$row[' status'].'</td>',
                            '<td>'.$row[' exam_code'].'</td>',
                        '</tr>';
                    }
                }

            ?>
        </tbody>
    </table>

    <a href="./admin/login.php" class="btn btn-success">Đăng nhập</a>
    <a href="./admin/register.php" class="btn btn-success mx-3">Đăng ký</a>
</div>

<?php
    include './partials-front/footer.php';
?>