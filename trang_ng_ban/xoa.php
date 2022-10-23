
<?php
require_once "config_cosmetic.php";
    
       // $id=$_GET["cat"];
        $id = $_GET["id"];
        $sql="DELETE FROM product where id='$id'";
        if (!mysqli_query($conn, $sql) ) {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
            
        }
        else {
            echo "xóa dữ liệu thành công"."<br/>";
            echo "<a href='product1.php?'>Về trang chính</a>";
        }
        mysqli_close($conn);
   
?>
