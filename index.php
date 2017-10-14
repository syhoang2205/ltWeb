
<?php require_once 'Init.php' ?>
<?php include 'header.php' ?>

    <h1>Trang Chủ</h1>
    
<?php if($currentUser) : ?>
Chào Mừng <?php echo $currentUser['fullname'] ?> Đã Trở Lại.
<?php else : ?>
    Bạn Chưa Đăng Nhập.
<?php endif; ?>


<?php include 'footer.php' ?>