<?php require('header.php'); ?>
<?php
    require_once "utils/connect_db.php";
    $product_id = isset ($_GET['product_id']) ? $_GET['product_id'] : -1;
    $product = mysqli_query($conn, "select * from product where id=" .$product_id);
?>
<div class="container">
 <?php
    $rowcount = mysqli_num_rows( $product );
    if( $rowcount >= 1){
        while($detail = mysqli_fetch_array($product)) {
            $discountPercent = isset($detail["discount_percent"])?$detail["discount_percent"]:0;
                                    $discountPrice = isset($detail["discount_price"])?$detail["discount_price"]:0;
                                    $basePrice = isset($detail["price"])? $detail["price"]: 0;
                                    $sellPrice = ceil($basePrice - ( $discountPrice >0 ? $discountPrice : $basePrice * $discountPercent/100));
?>
        <!--thông tin chung -->
        <div class=" mb-3" style="max-width: 100%;padding-top:100px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?=$detail["image"];?>" class="menu-img img-fluid img-box" alt="">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                <form method="POST" action="#">
                    <div style="width:100%; min-height: 400px">
                        <div class="card-body">
                            <h5 class="card-title card-title-product"><?=$detail["name"];?></h5>
                            <p class="card-text"><?=$detail["description"];?></p>
                            <p class="card-text"><small class="text-muted-price">Giá: <?=number_format($sellPrice);?>VND</small><small class="pr-info">(<?=number_format($basePrice);?>VND)</small></p>
                        </div>

                        <!--phân loại -->
                        <div style="padding-top: 16px; padding-bottom: 16px">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-success" for="btnradio1">Mã 01</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-success" for="btnradio2">Mã 02</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-success" for="btnradio3">Mã 03</label>
                            </div>
                            <div class="input-group quantity-input " style="margin-top: 16px;">
                                <button type="button" class="btn btn-outline-success" id="btn-minus-qty"><i class="bi bi-dash-circle"></i></button>
                                    <input type="number" id="order-quantity" class="form-control"  min="1" value="1" aria-describedby="basic-addon1">
                                <button type="button" class="btn btn-outline-success" id="btn-plus-qty"><i class="bi bi-plus-circle"></i></button>
                            </div>
                        </div>
                       
                    </div>
                    <!--số lượng  -->
                    <div style="padding-bottom: 16px">
                        <div class="field qty">
                            <!--thêm vào giỏ -->
                            <div style="padding-top: 10px">
                                <input class="btn btn-outline-success" type="submit" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
        </form>
                </div>
            </div>
        </div>

<?php
            break;
        }
    }else{
?>
    <div class="card mb-3 none-boder" style="width: 100%;padding-top:100px;  min-height: 400px; display:flex; justify-content:center; align-items:center;">
        <p style="text-align:center; font-size:20px; font-weight: bold">Sản phẩm không tồn tại</p>
    </div>
<?php
    }
?>
</div>
        <?php require('footer.php'); ?>