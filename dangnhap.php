<?php
session_start();
   $Email = $_POST['Email'];
   $Password = $_POST['Pass'];
   //Kết nối với database//
   $connect = new mysqli('localhost','root','','qltv');
   $sql = "SELECT * FROM nguoidung WHERE Email ='$Email'";
   $result = $connect->query($sql)->fetch_assoc(); 
//So sánh dữ liệu nhập vào với database//
if ($result['Email']== $Email){
    if ($result['Matkhau']== $Password){
        if (isset($_POST['remember_me']))
            {
                setcookie('user',$Email,time()+3600,'/','',0,0);
                setcookie('pass',$Password,time()+3600,'/','',0,0);
                $_SESSION['Email'] = $Email;       /* Lấy thông tin đăng nhập (email) lưu vào session*/


            }
            header ("Location: tranguser.php");
            exit();
        }
    else
            header("Location: form-html.php?error=2?Email=$Email");    
    }  
else{
        header("Location: form-html.php?error=1");
    }
    $_SESSION['Email'] = $Email;

?>


