<!DOCTYPE html>
<?php
    if(isset($_POST["ho_ten"]))
    {
        //xử lý cập nhật dữ liệu vào database
        $id = $_POST["id"];
        $hoTen = $_POST["ho_ten"];
        $Gia = $_POST["gia"];
        $anh = $_POST["hinh_anh"];
        
        $moTa=$_POST["mo_ta"];
        $Danhmuc=$_POST["danh_muc"];
        $trangThai=$_POST["trang_thai"];
        $chietKhau=$_POST["chiet_khau"];
        $giamGia=$_POST["giam_gia"];
        $soLuong=$_POST["so_luonh"];
        $TongSL=$_POST["tong_sl"];

        require_once "config_cosmetic.php";
        $sql = "update product set id = '$id', name = '$hoTen', price ='$gia', image ='$anh', description ='$moTa', category_id='$Danhmuc',
        status = '$trangThai', discount_percent = '$chietKhau', discount_price = '$giamGia',
        sold_quantity ='$soLuong', total_quantity='$TongSL' where id = '$id'";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Cập nhật dữ liệu thành công"."<br/>";
            echo "<a href='product1.php'>Về trang chính</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else
    {
?>
<html>
    <head></head>
    <body>
        <?php 
            $id = $_GET["id"];
            require_once "config_cosmetic.php";
            $sql = "select * from product where id = '$id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            mysqli_close($conn);
        ?>
        <h2>Cập nhật sản phẩm</h2>
        <form action = "update.php" method = "POST">
            Tên sản phẩm:<br/>
            <input type ="text" value="<?php echo $row['name'];?>" name = "ho_ten"/><br/>
            Giá:<br/>
            <input type ="text" value="<?php echo $row['price'];?>" name = "gia"/><br/>
            Hình ảnh:<br/>
            <input type = "file" value = "<?php echo $row['image'];?>" name = "hinh_anh"/><br/><br/>
            <input type ="sbumit"/>
            Mô tả:<br/>
            <input type ="text" value="<?php echo $row['description'];?>" name = "mo_ta"/><br/>
            Danh mục:<br/>
            <input type ="text" value="<?php echo $row['category'];?>" name = "danh_muc"/><br/>
            Trạng thái:<br/>
            <input type ="text" value="<?php echo $row['status'];?>" name = "trang_thai"/><br/>
            Chiết khấu:<br/>
            <input type ="text" value="<?php echo $row['discount_percent'];?>" name = "chiet_khau"/><br/>
            Giảm giá:<br/>
            <input type ="text" value="<?php echo $row['discount_percent'];?>" name = "giam_gia"/><br/>
            Số lượng:<br/>
            <input type ="text" value="<?php echo $row['sold_quantity'];?>" name = "so_luong"/><br/>
            Tổng SL:<br/>
            <input type ="text" value="<?php echo $row['told_quantity'];?>" name = "tong_sl"/><br/>
            <input type ="submit" name = "submit" value = "Lưu"/>
            <a href="product1.php">Thoát</a>
        </form>
    </body>
</html>
<?php
    }
?>