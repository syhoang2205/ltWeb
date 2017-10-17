<?php 
require_once 'Init.php';
require_once 'function.php';
$success = true;
  if (!empty($_POST['email']) && !empty($_POST['password']))
  {
   $user = findUserEmail($_POST['email']);
   
    if ($user) 
    {
      if (password_verify($_POST['password'], $user['password'])) 
      {
        $success = true;
        $_SESSION['userId'] = $user['id'];
        
        header('location: index.php'); 
        exit();
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
  }
?>
<?php include 'header.php' ?>

<h1>Đăng Nhập</h1>

  <?php if (!$success) : ?>
  <div class="alert alert-danger" role="alert">
    Email hoặc mật khẩu không hợp lệ vui lòng đăng nhập lại!
  </div>
  <?php endif; ?>

<form class="padding" method="POST">
  <div class="form-group">
    <label for="email">Địa chỉ email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Điền email vào đây" required autofocus value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''  ?>">
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Điền mật khẩu vào đây" required >
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>

<?php include 'footer.php' ?>