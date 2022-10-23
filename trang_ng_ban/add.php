<!DOCTYPE html>
<?php
    if(isset($_POST["tensp"]))
    {
        //xử lý cập nhật dữ liệu vào database
        //$id= $_POST["id"];
        $name = $_POST["tensp"];
        $price = $_POST["gia"];
        //$image=$_FILES['hinhanh']['name'];
        $description = $_POST["mota"];
        $category_id = $_POST["loai"];
        require_once "config_cosmetic.php";
        $sql= "INSERT INTO product(name, price, description, category_id) 
        values('".$name."', '".$price."', '".$description."', '".$category_id."')";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Thêm dữ liệu thành công"."<br/>";
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
        <h2>THÊM SẢN PHẨM</h2>
        <form action = "add.php" method = "post">
        
            Name:<br/>
            <input type ="text" value="" name = "tensp"/><br/>
        Price:<br/>
            <input type="text"  value= "" name="gia" /><br/>
    
        Description:<br/>
            <input type="text"  value= "" name="mota" /><br/>
        Category_id:<br/>
            <input type="text"  value= "" name="loai" /><br/>
            <input type ="submit" name = "submit" value = "Lưu"/>
            <a href="nguoi_ban.php">Thoát</a>
        </form>
    </body>
</html>
<?php
    }
?>