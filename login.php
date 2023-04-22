<?php
    $announce = "";
    include_once('./utils.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <title>Đăng nhập</title>


</head>
<body>
    <div id="main">
        <div class="heading">
            <!-- Navbar -->
            <?php include_once('./navbar.php') ?>
        </div>

        <!-- content of page -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12 cssForm">
                        <div class="ds-form">
                            <div>
                                <div class="ds-form">
                                    <img src="./img/logo.png" alt="" width="50%" class="img-fluid mx-auto d-block"></img>
                                    <h2 class="heading-login text-white" style="font-size: 24px; line-height: 42px;">Đăng nhập</h2>
                                    <form action="" class ="format-form" method='post'>
                                        <input type="text" class="login-input" name="email" placeholder="Email" style="display: block; ; padding: 10px;">
                                        <input type="password" class="login-input" name="password" placeholder="Mật khẩu" style="display: block; padding: 10px;">
                                        <p id="annouce"><?php echo $announce; ?></p>
                                        <a href="">Quên mật khẩu</a>
                                        <!-- <p class="text-white text-right">Quên mật khẩu</p> -->
                                        <input name='login' type="submit" class="btn login-input ds-ic text-black background-white font-weight-600" style="padding: 15px" value='Đăng nhập' >
                                        <div>
                                            <p class="text-white" style=" text-align: center; background-color: #413961; padding: 10px 0px;">Hoặc</p>
                                        </div>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style = "padding:10px"><img src="./img/ic_google.png" class="logo-login">Google</button>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style = "padding:10px"><img src="./img/ic_facebook.png" class="logo-login">Facebook</button>   
                                    </form>
                                </div>
                           </div>
                        </div>       
                    </div>

                    <div class="col-lg-2 m-auto">
                        <div class="line-vertical">
                            <div class="vl"></div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 col-md-12 ">
                        <div class="ds-form pd-form">
                            <div>
                                <div class="ds-form">
                                    <div class="ds-line">
                                        <h1 class="titleLogin mg-bottom font-weight-70">ĐĂNG NHẬP</h1>
                                        <hr class ="hr mg-bottom">
                                    </div>
                                    <h3 class="mg-bottom font-weight-300 overflow-text text-white ds-font-sm-20" style=" height: 29px;">DROL CINEMA xin chào!</h3>
                                    <p class="mg-bottom font-weight-300 overflow-text text-white ds-font-sm-14" style=" color: #FFFFFF; height: 29px;">Chúc quý khách có một trải nghiệm tuyệt vời tại rạp phim của chúng tôi</p>
                                    <h2 class ="mg-bottom font-weight-600 font-size-32" style=" height: 43px; color: #FFFFFF;">Bạn chưa có tài khoản?</h2>
                                    <a href="./signup.php" class="toSignUpPage btn">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer of page -->
        <?php include_once('./footer.php') ?>

    </div>

</body>
</html>
