<?php
    // Kết nối SQL
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'tlu_phonebook';
    $con = mysqli_connect(HOST, USER, PASS, DB);
    if (!$con) {
        die('Không kết nối được');
    }
?>