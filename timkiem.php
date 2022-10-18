<?php require('header.php'); ?>
<?php
    require_once "utils/connect_db.php";
    $current_page = isset ($_GET['page']) ? $_GET['page'] : 1;
    $search_key = isset ($_GET['search_key']) ? $_GET['search_key'] : "";
    $start_row = ($current_page-1) * 6;
    $all_products = mysqli_query($conn, "select *, product.name as product_name from product 
    inner join category on product.category_id = category.id
        where product.name like '%" . $search_key 
            ."%' or category.name like '%" 
            . $search_key ."%' " );
    $products = mysqli_query($conn, "select *, product.name as product_name,product.id as product_id from product 
    inner join category on product.category_id = category.id
        where product.name like '%" . $search_key 
            ."%' or category.name like '%" 
            . $search_key ."%' " 
            ." limit " .$start_row .", 6");
?>
<main id="main">
    <!-- ======= sản phẩm Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p>Khám phá <span>7COSMETIC</span></p>
            </div>

            </ul>
            <div class="search-content">
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
                        <a href="infor_product.php?product_id=<?=$product["product_id"];?>">
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
                        <div>
                            <h4><?=$product["product_name"];?></h4>
                            <p class="ingredients product-description">
                                <?=$product["description"];?>
                            </p>
                            <p class="price">
                                <?=number_format($sellPrice);?> <span style="font-size:18px;">VND</span>
                            </p>

                        </div>
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
            </div>
        </div>
        </div><!-- End son Menu Content -->


    </section><!-- End sản phẩm Section -->


</main><!-- End #main -->
<!-- chuyển trang -->
<?php
                            $total_row_count = mysqli_num_rows( $all_products );
                            $number_page=ceil($total_row_count/6);
                            if($total_row_count > 6){
                            ?>

<nav aria-label="Page navigation example">
    <ul class="pagination custom-pagination">
        <li class="page-item  <?=$current_page <= 1?"disabled":"";?>">
            <a class="page-link" href="timkiem.php?page=<?=$current_page-1;?>&search_key=<?=$search_key;?>"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
                                        for($x = 1; $x <= $number_page; $x++) {
                                    ?>
        <li class="page-item <?=$current_page == $x?"active":"";?>">
            <a class="page-link" href="timkiem.php?page=<?=$x?>&search_key=<?=$search_key;?>">
                <?=$x?>
            </a>
        </li>
        <?php
                                        }
                                    ?>
        <li class="page-item <?=$current_page >= $number_page?"disabled":"";?>">
            <a class="page-link" href="timkiem.php?page=<?=$current_page+1;?>&search_key=<?=$search_key;?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>

    </ul>
</nav>

<?php
                            }
                            ?>
<!-- end chuyển trang -->
<?php require('footer.php'); ?>