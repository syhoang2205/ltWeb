<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BTCN05</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class ="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">BTCN05</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo ($page == 'index') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>

                    <?php if (!$currentUser) : ?>
                        <li class="nav-item <?php echo ($page == 'login') ? 'active' : '' ?>">
                            <a class="nav-link" href="login.php">Đăng Nhập <span class="sr-only">(current)</span></a>
                        </li>
                    <?php endif; ?>

                    <?php if (!$currentUser) : ?>
                        <li class="nav-item <?php echo ($page == 'register') ? 'active' : '' ?>">
                            <a class="nav-link" href="register.php">Đăng Kí</a>
                        </li>
                    <?php endif; ?>

                    <?php if ($currentUser) : ?>
                        <li class="nav-item ">
                            <a class="nav-link" href="logout.php">Đăng Xuất</a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <?php if ($currentUser) : ?>
                            <a class="nav-link disabled" href="#">
                                <?php echo $currentUser['fullname'] ?>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>
    </div>