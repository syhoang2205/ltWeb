<?php require_once 'Init.php' ?>
<?php include 'header.php' ?>

<h1>Đăng Nhập</h1>

<?php if (!empty($_POST['email']) && !empty($_POST['password'])) : ?>
  <?php
    $success = true;
    $stmt = $db->prepare("SELECT * FROM account WHERE email=?");
    $stmt->execute(array(strtolower($_POST['email'])));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) 
    {
      if (password_verify($_POST['password'], $user['password'])) 
      {
        $success = true;
        $_SESSION['userId'] = $user['id'];
      } 
      else 
      {
        $success = false;
      }      
    } 
    else 
    {
      $success = false;
    }
  ?>
  <?php if ($success) : ?>
  <div class="alert alert-primary" role="alert">
    Đăng nhập thành công. Trở vể <a href="index.php">trang chủ</a>
    
  </div>
  <?php else : ?>
  <div class="alert alert-danger" role="alert">
    Email và mật khẩu không hợp lệ vui lòng <a href="login.php">đăng nhập</a> lại!
  </div>
  <?php endif; ?>
<?php else : ?>
<form class="padding" method="POST">
  <div class="form-group">
    <label for="email">Địa chỉ email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Điền email vào đây" required autocomplete="on" autofocus>
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Điền mật khẩu vào đây" required autocomplete="off" >
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>
<?php endif; ?>

<?php include 'footer.php' ?>