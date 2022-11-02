<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body> 
    <?php
    //Hủy toàn bộ các biến session của website đang có
    session_unset();
    session_destroy();
    //Chuyển đến trang Login
    header('Location: index.php');
    ?>
    </body>
</html>
