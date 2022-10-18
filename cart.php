<?php require('header.php'); ?>
<div style="padding:100px 50px 0 50px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i style="font-size:16px"
                            class="bi bi-trash"></i></button></td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i style="font-size:16px"
                            class="bi bi-trash"></i></button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i style="font-size:16px"
                            class="bi bi-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- ======= orders ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Đặt hàng</h2>
            <p>Thông tin <span>khách hàng</span>
        </div>

        <div class="row g-0">
            <div class="col-lg-12 d-flex align-items-center reservation-form-bg">
                <form action="forms/order.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="address" rows="3"
                                placeholder="Địa chỉ nhận hàng"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Ghi chú"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your booking request was sent. We will call back or send an Email
                                to
                                confirm your reservation. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Đặt hàng</button></div>
                </form>
            </div><!-- End order -->

        </div>

    </div>
</section><!-- End Book A Table Section -->
<?php require('footer.php'); ?>