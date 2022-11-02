<?php include('trangchu.php'); ?>
<!DOCTYPE html>
<html>
    <!-- Mục sản phẩm -->
    <?php
        require_once "config.php";
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
    ?>

    <section class="product"></h3> <!-- Tạo khu vực cho những nội dung được hiển thị trong trang sản phẩm -->
        
        <?php
            //Khởi tạo biến điếm $i=0
            $i=0;
            while($row =mysqli_fetch_assoc($result)){
            //Nếu biến đếm $i=3 (mỗi vòng lặp chạy tới 3 sản phẩm thì xuống hàng)
                if($i==3){
                    echo"</tr";
                    $i=0;
                }
        ?>  
            <td>
                <div class="somebox">
                    <div class="box">
                        <?php echo '<img src='.$row["HinhAnh"].'><br>' ;// In ra tên sản phẩm ?>
                        <b><?php echo $row["TenSP"];// In ra tên sản phẩm ?></b>
                        <p><a href="ChitietSP.php?MaSP=<?php echo $row['MaSP']; // Tạo liên kết đến trang chi tiết sản phẩm và truyền id vào sản phẩm ?>"></p>Xem thêm</a>
                    </div>
                </div>
            </td>
   
    <?php
            $i++;
    }
    ?>

    <?php
    }
    else {
    echo "0 results";
    }
    mysqli_close($conn);
?>
    </section>
    <!-- Kết thúc mục sản phẩm -->
</body>
</html>
