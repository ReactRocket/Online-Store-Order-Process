<?php
// DATABASE CONNECTION
$con = mysqli_connect('localhost', 'root', '', 'order_db');

if (!$con) {
    echo 'Database not connected!';
    die();
}