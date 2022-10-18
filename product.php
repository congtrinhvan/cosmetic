<?php require 'header.php';?>
<?php
    require_once "utils/connect_db.php";
    $result = mysqli_query($conn, "select * from category");
    $current_page=1;
    $category_id=1;
    if (!isset ($_GET['page']) ) {  

        $current_page = 1;  

    } else {  

        $current_page = $_GET['page'];  

    }  
    if (!isset ($_GET['category_id']) ) {  

        $category_id = 1;  

    } else {  

        $category_id = $_GET['category_id'];  

    }  

?>
<main id="main">
    <!-- ======= sản phẩm Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Khám phá <span>7COSMETIC</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                ?>

                <li class="nav-item">
                    <a class="nav-link <?=$row["id"]==$category_id?"active":"";?> show" data-bs-toggle="tab"
                        data-bs-target="#menu-<?=$row["id"];?>">
                        <h4><?=$row["name"];?></h4>
                    </a>
                </li>
                <?php
                    $i++;
                    }
                ?>

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <?php
                       
                        foreach($result as $row) {
                            $all_result = mysqli_query($conn, "select * from product where category_id=".$row["id"]);
                            $curr_page = 1; 
                            if($category_id == $row["id"]){
                                $curr_page =  $current_page;
                            }
                            $start_row = ($curr_page-1) * 6;
                            $products = mysqli_query($conn, "select * from product where category_id=".$row["id"] ." limit " .$start_row .", 6");
                           
                    ?>
                <div class="tab-pane fade <?=$row["id"]==$category_id?"active show":"";?> " id="menu-<?=$row["id"];?>">

                    <div class="tab-header text-center">
                        <p>Sản phẩm</p>
                        <h3><?=$row["name"];?></h3>
                    </div>

                    <div class="row gy-5">
                        <?php
                            $rowcount = mysqli_num_rows( $products );
                            if($rowcount > 0){
                                foreach( $products as $product) {  
                                    $discountPercent = isset($product["discount_percent"])?$product["discount_percent"]:0;
                                    $discountPrice = isset($product["discount_price"])?$product["discount_price"]:0;
                                    $basePrice = isset($product["price"])? $product["price"]: 0;
                                    $sellPrice = ceil($basePrice - ( $discountPrice >0 ? $discountPrice : $basePrice * $discountPercent/100));
                            ?>
                        <div class="col-lg-4 menu-item custom-menu-item">
                            <a href="infor_product.php?product_id=<?=$product["id"];?>">
                                <img src="<?=$product["image"];?>" class="menu-img img-fluid img-box" alt="">
                                <?php
                                                                    if($basePrice != $sellPrice){
                                                                ?>
                                <p class="base-price">
                                    <?=number_format($basePrice);?>VND
                                </p>
                                <?php
                                                                    }
                                                                ?>
                            </a>
                            <h4><?=$product["name"];?></h4>
                            <p class="ingredients product-description">
                                <?=$product["description"];?>
                            </p>
                            <p class="price">
                                <?=number_format($sellPrice);?> <span style="font-size:18px;">VND</span>
                            </p>

                        </div><!-- Menu Item -->
                        <?php
                                }
                                    }else{
                                ?>
                        <p style="padding: 20px; text-align:center;">Không tìm thấy sản phẩm</p>
                        <?php
                                    }
                                ?>
                    </div>
                    <?php
                            $total_row_count = mysqli_num_rows( $all_result );
                            $number_page=ceil($total_row_count/6);
                            if($total_row_count > 6){
                            ?>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination custom-pagination">
                            <li class="page-item  <?=$curr_page <= 1?"disabled":"";?>">
                                <a class="page-link"
                                    href="product.php?page=<?=$curr_page-1;?>&category_id=<?=$row["id"];?>"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php
                                        for($x = 1; $x <= $number_page; $x++) {
                                    ?>
                            <li class="page-item <?=$curr_page == $x?"active":"";?>">
                                <a class="page-link" href="product.php?page=<?=$x?>&category_id=<?=$row["id"];?>">
                                    <?=$x?>
                                </a>
                            </li>
                            <?php
                                        }
                                    ?>
                            <li class="page-item <?=$curr_page >= $number_page?"disabled":"";?>">
                                <a class="page-link"
                                    href="product.php?page=<?=$curr_page+1;?>&category_id=<?=$row["id"];?>"
                                    aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>

                        </ul>
                    </nav> <!-- end chuyển trang -->

                    <?php
                            }
                            ?>
                </div><!-- End son Menu Content -->
                <?php
                        }
                    ?>
            </div>
        </div><!-- End chăm sóc tóc Menu Content -->


        <?php
            mysqli_close($conn);
        ?>

    </section><!-- End sản phẩm Section -->
    <!-- chuyển trang -->


</main><!-- End #main -->

<?php require 'footer.php';?>