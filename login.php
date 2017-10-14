<?php require_once 'Init.php' ?>
<?php include 'header.php' ?>

<h1>Đăng Nhập</h1>
<?php if (!empty($_POST['email']) && !empty($_POST['password'])) : ?>
    <?php
        $success = true;
        $email = strtolower($_POST['email']);

        $stmt = $db->prepare("SELECT * FROM account WHERE email=$email");
        $stmt->execute(array(strtolower($_POST['email'])));
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($user)
        {
            if(password_verify($_POST['password'],$user['password']))
            {
                $success = true;
                $_SESSION['userID'] = $user['id'];
            }
            else
            {
                $success = false;
            }
        }
    ?>
    <?php if($success) : ?>
    <div class="alert alert-primary" role="alert">
        Đăng nhập thành công. Trở vể <a href="index.php">Trang Chủ</a>
    </div>
    <?php else: ?>
    <div class="alert alert-danger" role="alert">
        Email hoặc Password Không Hợp Lệ. Trở vể <a href="login.php">Đăng Nhập</a>
    </div>
    <?php endif; ?>
<?php else: ?>
    <form method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php endif; ?>
<?php include 'footer.php' ?>