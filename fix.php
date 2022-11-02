<?php

if(isset($_POST['btt'])){
    echo"<pre>";
    print_r($_POST);
$email    = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$fullname = $_POST['txtFullname'];
$phone    = $_POST['txtPhone'];
$birthday = $_POST['txtBirthday'];
$conn = new mysqli('localhost','root','','qltv');
    $sql = "SELECT * FROM nguoidung WHERE Email ='$email'";
    $result = $conn->query($sql)->fetch_assoc();
if (!empty($email) && !empty($password) && !empty($fullname) && !empty($phone) && !empty($birthday)){
   echo "<pre>";
   print_r($_POST);

   $sql = "INSERT INTO `nguoidung` (`Email`, `Matkhau`, `HoTen`, `SoDT`, `NgaySinh`) 
   VALUES ('$email','$password','$fullname','$phone','$birthday')";

   if($conn->query($sql)==TRUE){
    echo " Lưu dữ liệu thành công";
   } else{
    echo "Lỗi {$sql}".$conn->error;
   }
} else{
    echo" Bạn cần nhập thông tin đầy đủ!";
}
}
?>
