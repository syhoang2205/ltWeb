<?php
// PHP hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Khởi tạo session
session_start();
// Gán biến page giống với tên file
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
// Kết nối CSDL
$db = new PDO('mysql:host=localhost:8889;dbname=btcn05;charset=utf8', 'root', 'root');
// Kiểm tra thông tin người dùng
$currentUser = null;
if (isset($_SESSION['userID'])) 
{
  $id = $_SESSION['userID'];
  $stmt = $db->prepare("SELECT * FROM account WHERE id=$id");
  $stmt->execute(array($_SESSION['userID']));
  $currentUser = $stmt->fetch(PDO::FETCH_ASSOC);
}