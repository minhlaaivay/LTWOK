<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>SIGN IN</title>
</head>

<body> 
<?php 
    if (isset($_GET['error']))
        if ($_GET['error']==1){
            echo "<p><strong>EMAIL KHÔNG TỒN TẠI</strong</p>";
        } 
        else {
            echo "<p><strong>MẬT KHẨU KHÔNG ĐÚNG</strong</p>";
        }

    if (isset($_GET['Email']))
        $Email = $_GET['Email'];
    else
        $Email = '';
    ?>

<div id="wrapper">
        <form method ="POST" action="dangnhap.php" id="form-login">
            <h1 class="form-heading">Đăng Nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="Email" id= "guess" autocomplete="off" class="form-input" placeholder="Email" required="" value=<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="Password" name="Pass" id= "Pass" class="form-input" placeholder="Password" required="" value=<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>>
                <div id="eye">
                    <i class="far fa-eye"></i>
                    </div>
            </div>
            <input type="submit" name="submit" value="Đăng nhập" class="form-submit">
            <div>
                <lable class="form-check">Ghi nhớ</lable>
            <input type="checkbox" name="remember_me" id= "remember_me" value="1" <?php if(isset($_COOKIE['user'])) echo "checked"; ?>/>       
                <div class="dk">
                    <a href="dangky.php" class="last">Đăng ký</a>                
             </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>