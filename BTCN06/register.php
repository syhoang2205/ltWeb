<?php 
require_once 'Init.php';
require_once 'function.php';
  $success = true;
  if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['agree-tos']) && $_POST['agree-tos'] == 'on')
  {
    $email = strtolower($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fullname = $_POST['fullname'];
    
    // Kiểm tra xem email có trùng không
    $user = findUserEmail($email);
  
    if($user)//có trùng thì trả về false
    {
        $success = false;
    }
    else// ko trùng thì thêm vào database
    {
      $insertId = insertUser($email, $password, $fullname);

      $_SESSION['userId'] = $insertId;
      
      header('location: index.php');//chuyển về trang chủ
      exit();
    }
  }
?>
<?php include 'header.php' ?>

<h1>Đăng ký tài khoản</h1>

<?php if(!$success): ?>
  <div class="alert alert-danger" role="alert">
    Email đã tồn tại.
  </div>
<?php endif; ?>

<form class="padding" method="POST">
  <div class="form-group">
    <label for="fullname">Họ và tên</label>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Điền họ và tên vào đây" required value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : ''  ?>">
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Điền email vào đây" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''  ?>">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Điền mật khẩu vào đây" required>
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" name="agree-tos" class="form-check-input" required>
      Đồng ý điều khoản trang Web
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>

<?php include 'footer.php' ?>