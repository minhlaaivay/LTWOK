<!DOCTYPE html>
<html>
    <!-- Mục sản phẩm -->
    <?php
        require_once "config.php";
        $MaSP = 0;
        if (isset($_GET["MaSP"])) {
            $MaSP = $_GET['MaSP'];
        }
        /* Lấy thông tin sản phẩm theo MaSP */
        $sql = "SELECT * FROM sanpham WHERE MaSP=$MaSP";
        $result = mysqli_query($conn, $sql);
        // output data of each row
    ?>
        <div class="detail">
        <?php
            while($row =mysqli_fetch_assoc($result)){

        ?>  
            <td>
                <?php echo '<img src='.$row["HinhAnh"].'><br>' ; ?>
                <h3><?php echo $row['TenSP']; ?></h3></div></ br>
				<i> Giá : <?php echo $row['Gia']; ?> đ</i>
				<p><?php echo $row['Thongtinsanpham']; ?></p>
            </td>
            </div>
    <?php
    }
    ?>
    
</html>
