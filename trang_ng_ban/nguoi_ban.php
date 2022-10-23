<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>7COSMETIC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
   /* <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

   
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>7COSMETIC<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="contact.php">Hồ sơ shop </a></li>
                    <li><a href="product1.php">Sản phẩm </a></li>
                    <li><a href="founder.php">Đơn bán</a></li>
                    <li><a href="founder.php">Kênh vận chuyển</a></li>
                    <li><a href="founder.php">Doanh thu</a></li>
                    <li><a href="founder.php">Cài đặt</a></li>

                  
                </ul>
                <ul>
                <li>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search"
                                placeholder="Nhập tên, mã sản phẩm cần tìm kiếm" aria-label="search">
                            <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                        </form>
                    </li>
                    <a class="btn-book-a-table" href="contact.php">Liên hệ</a>

                    </ul>
                    

            
                </nav>
                
        </div>

        
    </header><!-- End Header -->
    <!--<div><img src="cosmetic1.jpg"alt="" data-aos-delay="zoom-out"/></div>
    <?php
require_once "config_cosmetic.php";
$sql = 'SELECT * FROM product WHERE 1';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
//while($row = mysqli_fetch_assoc($result)) {
//echo “Mã SV: " . $row["MaSinhVien"]. " - Họ Tên: " . $row["Ho"]. " " . $row["Ten"]. "<br/>"

}
else {
echo "0 results";
}
mysqli_close($conn);
?>
</body>