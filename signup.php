<?php
   $announce = "";
   require_once('./utils.php');

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
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <title>Đăng kí</title>


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
                                    <img src="./img/logo.png" width="50%" alt="" class="img-fluid mx-auto d-block mg-top d-block"></img>
                                    <h2 class="heading-login text-white" style="text-align: center; font-size: 24px;">Đăng ký tài khoản</h2>
                                    <form action="" class = "format-form" method="post" onSubmit="return checkForm()">
                                        <input type="text" class="login-input" name="name" id="name" placeholder="Tên của bạn" style="display: block; padding: 10px;" required>
                                        <input type="text" class="login-input" name="phone" id="phone" placeholder="Số điện thoại" style="display: block; padding: 10px;" required>
                                        
                                        <input type="email" class="login-input" name="email" id="email" placeholder="Email" style="display: block; padding: 10px;" required>
                                        <input type="password" class="login-input" name="password" id="pass" placeholder="Mật khẩu" style="display: block; padding: 10px;" required>
                                            
                                        
                                        <input type="password" class="login-input" name="re-password" id="re-pass" placeholder="Nhập lại mật khẩu" style="display: block; padding: 10px;" required>
                                        <p id="annouce"><?php echo $announce; ?></p>
                                        <input type="submit" id="register" name="register" class="btn login-input ds-ic text-black background-white font-weight-600 mt-5" style="padding: 15px" value="Đăng ký">
                                        
                                        <p class="text-white m-auto" style="text-align: center; background-color: #413961; padding: 10px 0px;">Hoặc</p>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style="padding: 10px" ><img src="./img/ic_google.png" class="logo-login">Google</button>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style="padding: 10px" ><img src="./img/ic_facebook.png" class="logo-login">Facebook</button>   
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

                    <div class="col-lg-5 col-12 col-md-12">
                        <div class="ds-form pd-form">
                            <div>
                                <div class="ds-form">
                                    <div class="ds-line">
                                        <h1 class="titleLogin mg-bottom font-weight-70 overflow-text">ĐĂNG KÝ TÀI KHOẢN</h1>
                                        <hr class ="hr mg-bottom">
                                    </div>
                                    <h3 class="mg-bottom overflow-text font-weight-300 overflow-text text-white ds-font-sm-20" style=" height: 29px;">DROL CINEMA xin chào!</h3>
                                    <p class="mg-bottom overflow-text font-weight-300 overflow-text text-white ds-font-sm-14" style=" height: 29px;">Chúc quý khách có một trải nghiệm tuyệt vời tại rạp phim của chúng tôi</p>
                                    <h2 class ="mg-bottom" style="color: #FFFFFF; font-weight: 600; font-size: 32px;">Bạn đã có tài khoản?</h2>
                                    <a href="./login.php" class="toLoginPage btn">Đăng nhập</a>
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

    <script src="./js/signup.js"></script>

</body>
</html>