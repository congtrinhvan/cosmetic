<?php require('header.php'); ?>
<main id="main" class="container" style="display:flex; justify-content:center;">
    <div class="col-md-6">
        <div class="hero ">
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Tên đăng nhập</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mật khẩu</label>
                </div>
                <div style="margin-top:10px; display:flex; justify-content:center;">
                    <button type="submit" class="btn btn-outline-success">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div>

</main>
<?php require('footer.php'); ?>