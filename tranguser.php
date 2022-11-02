<?php include('index.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
        <!-- Bắt đầu header-->
        <header class="header">           
            <img src="images/1.png" alt="" class="logo">

            <nav class="navbar"> <!-- Tạo thanh điều hướng(thanh hiển thị các tác vụ) -->
                <a href="index.php">Trang chủ</a>
                <a href="#menu">Giới thiệu</a>
                <a href="sanpham.php">Sản phẩm</a>
                <a href="#contact">Liên hệ</a>
                <a href="form-html.php">Người dùng đã đăng nhập</a>
                <a href="log_out.php">Đăng Xuất</a>
            </nav>    
            
        </header>
        <!-- Kết thúc header-->
        <?php 
       if (isset($_SESSION['Email'])){
           echo 'Bạn đã đăng nhập với tên là '.$_SESSION['Email']."<br/>";
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
       ?>
    </body>

</html>
