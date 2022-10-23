<html>
    <head>
    <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
    <div class="container" data-aos="fade-up">

<div class="section-header">
    <p>Khám phá <span>7COSMETIC</span></p>
</div>

<ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

   
    </li>

    <a href='add.php' class='btn btn-primary' style='margin:5px;'><i class='fa fa-plus'></i> Thêm</a></br>
        <a href='product1.php?cat=1'>Son</a><br/>
        <a href='product1.php?cat=2'>Kem chống nắng</a><br/>
        <a href='product1.php?cat=3'>Sửa rửa mặt</a><br/>
        <a href='product1.php?cat=4'>Nước tẩy trang</a><br/>
        <a href='product1.php?cat=5'>Kem dưỡng da</a><br/>
        <a href='product1.php?cat=6'>Mặt nạ</a><br/>
        <?php
            $cat = "1";
            if(isset($_GET["cat"]))
                $cat = $_GET["cat"];
        ?>
        <?php
            $page = 1;
            if(isset($_GET["page"]))
            {
                $page = $_GET["page"];
            }
                
            
            require_once "config_cosmetic.php";
            $sql = "SELECT * FROM product WHERE category_id like '%$cat%' limit ".(($page-1)*10).",10";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            ?>
            <table>
            <?php
                $dem = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    if($dem==0)
                        echo "<tr>";
                ?>
                        <td align='center'>
                            <img src="<?php echo $row["image"];?>" width='250px'/><br/>
                            <b><?php echo $row["name"];?></b><br/>
                            <i><?php echo $row["price"];?></i>
                            <a href='xoa.php?id=<?php echo $row["id"];?>'>Xóa</a>
                            <a href='update.php?id=<?php echo $row["id"];?>'>Cập nhật</a>
                        </td>
                    <?php
                    $dem++;
                    if($dem==5)
                    {
                        echo "</tr>";
                        $dem=0;
                    }
                }
                ?>
                </table>
                <?php
            }
            else {
                    echo "0 results";
                }
            
            $sql2 = "SELECT count(*) as sl FROM product WHERE category_id like '%$cat%'";
            $numPage = 0;
            $result = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $numPage = ceil($row["sl"]/10);
            }
            mysqli_close($conn);

            
        ?>
        <?php 
            for ($i = 1; $i<=$numPage;$i++)
            {
        ?>
             <a href='product1.php?cat=<?php echo $cat;?>&page=<?php echo $i;?>'><?php echo $i;?></a>
        <?php        
            }
        ?>
       
    </body>
</html>