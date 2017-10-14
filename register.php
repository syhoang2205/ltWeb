<?php require_once 'Init.php' ?>
<?php include 'header.php' ?>

<h1>Đăng ký tài khoản</h1>
<?php if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['agree-tos']) && $_POST['agree-tos'] == 'on') : ?>
<?php
  $email = strtolower($_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $fullname = $_POST['fullname'];
  $success = true;
  // Kiểm tra xem email có trùng không
  $stmt = $db->prepare("SELECT * FROM account WHERE email=$email");
  $stmt->execute(array($email));
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if($user)//sai thì trả về false
  {
      $success = false;
  }
  else// đúng thì thêm vào database
  {
    $stmt = $db->prepare("INSERT INTO account (email, password, fullname) VALUE ('$email', '$password', '$fullname')");
    $stmt->execute(array($email, $password, $fullname));
    $insertId = $db->lastInsertId();
    $_SESSION['userId'] = $insertId;
  }
?>
<?php if($success): ?>
<div class="alert alert-primary" role="alert">
  Đăng ký thành công. Trở về <a href="index.php">trang chủ</a>.
</div>
<?php else: ?>
<div class="alert alert-primary" role="alert">
  Email đã tồn tại. <a href="register.php">Đăng Kí</a> Lại.
</div>
<?php endif; ?>

<?php else: ?>
<form method="POST">
  <div class="form-group">
    <label for="fullname">Họ và tên</label>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Điền họ và tên vào đây">
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Điền email vào đây">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Điền mật khẩu vào đây">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" name="agree-tos" class="form-check-input">
      Đồng ý điều khoản trang Web
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
<?php endif; ?>
<?php include 'footer.php' ?>