<?php 
require_once 'Init.php';
require_once 'function.php';

    $success = true;
    if(!empty($_POST['fullname']))
    {
        if($currentUser['id'])
        {
            $success = true;
            $username = updateUserName($_POST['fullname'],$currentUser['id']);
        }
    }
?>
<?php include 'header.php' ?>
<h1>Thay Đổi Thông Tin</h1>

<form class="padding" method="POST">
  <div class="form-group">
    <label for="fullname">Họ Tên</label>
    <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Điền Tên Vào Đây." require value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : ''  ?>">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php include 'footer.php' ?>