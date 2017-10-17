<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" sizes="32x32" href="icon1.png">
    <title>BTCN06</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style>
    body 
    {
        font-family: "Helvetica", "Arial", sans-serif;
        margin: 0 auto;
        max-width: 50em;
        background-color: #fff;
        color: #555;
        line-height: 1.5;
        padding: 4em 1em;
    }

    .padding
    {
        padding: 4em 12em;
    }

    h1 
    {
        color: #333;
        margin-top: 1em;
        padding-top: 1em;
        text-align: center;
    }
    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }
  </style>
  <body>
        <div class ="container">
            <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php"><img src="icon1.png" width="32" height="32" alt=""></a>
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
                            
                            <li class="nav-item <?php echo ($page == 'register') ? 'active' : '' ?>">
                                <a class="nav-link" href="register.php">Đăng Kí</a>
                            </li>
                        <?php endif; ?>

                        <?php if ($currentUser) : ?>
                            <li class="nav-item ">
                                <a class="nav-link" href="logout.php">Đăng Xuất</a>
                            </li>

                            <li class="nav-item <?php echo ($page == 'profile') ? 'active' : '' ?>">
                                <a class="nav-link" href="profile.php">
                                    <?php echo $currentUser['fullname'] ?>
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
