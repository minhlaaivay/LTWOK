
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/res.css">
</head>
<body>
 <!--Bắt Đầu Phần Nội Dung-->
        <div id="wrapper">
            
        <form action="fix.php" method = "POST" id="form-res">
                <h1 class="form-heading">ĐĂNG KÝ TÀI KHOẢN</h1>
                    <div class="from-wrap">
                    <lable class="form-check">Email</lable>
                    <input type="email" id="email" placeholder="email@address.com" name="txtEmail" required />
                    </div>
                    <div class="from-wrap">
                    <lable class="form-check">Mật khẩu</lable>
                    <input type="password" id="password" placeholder="Có ít nhất 8 ký tự"  name="txtPassword" required
                     pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                     title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
                     <span class="show-btn"><i class="fas fa-eye"></i></span>
                    </div>           
                    <div class="from-wrap">
                    <lable class="form-check">Họ tên</lable>
                    <input type="text" id="fullname" name="txtFullname" required minlength="3" maxlength="100" />
                    </div>
                    <div class="from-wrap">
                    <lable class="form-check">Số điện thoại</lable>
                    <input type="tel" id="phone" placeholder="5555555555" name="txtPhone" required
                     pattern="[0-9]{10}" />
                    </div>
                    <div class="from-wrap">
                    <lable class="form-check">Ngày sinh</lable>
                        <input type="date" name="txtBirthday">
                   </div>
                    <div class="from-wrap">
                        <input type="submit" name="btt" value="Đăng Ký"><br>&emsp;
                        <input type="reset" value="Nhập lại" />
                    </div>

                </form>
        </div>
</body>
</html>

