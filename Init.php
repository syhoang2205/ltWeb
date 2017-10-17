<?php

// PHP hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Khởi tạo session
session_start();
// Gán biến page giống với tên file
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
// Kết nối CSDL
//$db = new PDO('mysql:host=localhost;dbname=id2816986_btcn05;charset=utf8', 'id2816986_mydb', '12345678');
$db = new PDO('mysql:host=localhost:8887;dbname=btcn06;charset=utf8', 'root', 'root');
// Kiểm tra thông tin người dùng
$currentUser = null;

require_once 'function.php';

if (isset($_SESSION['userId'])) {
  $currentUser = findUserId($_SESSION['userId']);
}