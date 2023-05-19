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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/chonghe.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <title>Chọn Ghế</title>

</head>

<body>
    <div id="main">
        <div class="heading">
            <!-- Navbar -->
            <?php include_once('./navbar.php') ?> 
        </div>
        <!-- End navbar -->

        <!-- Status bar -->
        <div class="content">
            <div class="status mb-5">
                <div id="buttons">
                    <a href="#" class="btn btn-chonve">Chọn vé </a>
                    <a href="#" class="btn btn-chonghe">Chọn ghế</a>
                    <a href="#" class="btn btn-chondoan">Chọn đồ ăn</a>
                    <a href="#" class="btn btn-chonthanhtoan">Thanh toán</a>
                    <a href="#" class="btn btn-datvethanhcong">Đặt vé thành công</a>
                </div>
            </div>

            <!-- End status bar -->

            <!-- Content -->
            <!-- Information film-->
            <?php


            $getId = $_GET['id'];

            $statement = "SELECT * FROM xuatchieu WHERE maXC= '$getId' ";

            $data = getAllData($statement, 1);

            foreach ($data as $value) :
                $xc = $value['maXC'];
                $id = $value['maPhim'];

                $idFilm = getData("SELECT tenPhim, anh, gia FROM phim WHERE  maPhim = $id ", 1);
                $name = $idFilm['tenPhim'];
                $image = $idFilm['anh'];
                $money = $idFilm['gia'];



                $idRap = $value['maRap'];
                $rap = getData("SELECT diachi FROM rap WHERE  maRap = $idRap ", 1);
                $address = $rap['diachi'];

                $gioChieu = $value['ngaygio'];

            ?>
                <div class="container">

                    <div class="row mb-5">

                        <div class="col-lg-2 col-md-4 col-12 mt-4">
                            <div class="ds-card-body">
                                <div class="img-holder" id="<?php echo $xc ?>">
                                    <img src="<?php echo $image ?>" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mt-4">
                            <div class="ds-card-body">
                                <div class="title-name pt-3">
                                    <p class="text-white font-weight-600 ">Tên phim</p>
                                </div>
                                <div class="body-card">
                                    <p class="text-white font-weight-600"><?php echo $name ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-4">
                            <div class="ds-card-body css-footer-card">
                                <div class="title-name">
                                    <p class="text-white font-weight-600 overflow-text">Thông tin đặt vé</p>
                                </div>

                                <div class="body-card">
                                    <div class="css-body-card">
                                        <p class="text-white">Ngày</p>
                                        <p class="text-white font-weight-600">Thứ 6, 19/05/2023</p>
                                    </div>

                                    <div class="css-body-card">
                                        <p class="text-white">Giờ chiếu</p>
                                        <p class="text-white font-weight-600"><?php echo $gioChieu ?></p>
                                    </div>

                                    <div class="css-body-card">
                                        <p class="text-white">Rạp chiếu</p>
                                        <p class="text-white font-weight-600"><?php echo $address ?></p>
                                    </div>

                                </div>

                                <div class="footer-card text-right">
                                    <h4 class="text-white font-weight-600" style="margin-right:15px"><?php echo "$money vnd" ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-12 mt-4">
                            <div class="ds-card-body css-footer-card">
                                <div class="title-name">
                                    <p class="text-white font-weight-600">Sản phẩm</p>
                                </div>

                                <div class="body-card">
                                    <p class="text-white font-weight-600">Không có</p>
                                </div>
                                <div class="footer-card text-right">
                                    <h4 class="text-white font-weight-600" style="margin-right:15px"></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-12 mt-4">
                            <div class="ds-card-body css-footer-card">
                                <div class="title-name">
                                    <p class="text-white font-weight-600">Tổng đơn hàng</p>
                                </div>

                                <div class="body-card">

                                </div>

                                <div class="footer-card text-right">
                                    <h4 class="text-white font-weight-600" style="margin-right:15px"></h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>


                    <!-- Product-->
                    <div class="buy-product">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="sub text-white font-weight-800 font-size-20">Mua sản phẩm</div>
                            </div>
                            <?php
                            $data = getAllData('SElECT tenSP,gia,maBapNuoc FROM bapnuoc', 1);

                            foreach ($data as $value) {
                            ?>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card">
                                        <img class="card-img-top" src="./img/img_bapnuoc.jpg" alt="Card image" width="247" height="208">
                                        <div class="card-body">
                                            <h4 class="card-food-title"><?php echo $value['tenSP'] ?> </h4>
                                            <p class="card-food-text"><?php echo 'Giá: ' . $value['gia'] . '.vnd' ?></p>

                                            <div class="btn-promotion" id="<?php echo $value['maBapNuoc'] ?>">Mua</div>
                                        </div>
                                    </div>
                                </div>

                            <?php }; ?>
                        </div>

                        <!-- Choose your seat-->
                        <div class="row mt-5">
                            <div class="col-12 mb-4">
                                <div class="sub text-white font-weight-800 font-size-20">Chọn ghế xem phim</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-12 mt-4">
                                <div class="ds-avaiChair">
                                    <div class="label-container">
                                        <div class="avaiChair">
                                            <div class="chair red-chair"></div>
                                            <p class="text-white font-weight-700">Ghế trống</p>
                                        </div>

                                        <div class="avaiChair">
                                            <div class="chair blue-chair"></div>
                                            <p class="text-white font-weight-700">Đã đặt</p>
                                        </div>

                                        <div class="avaiChair">
                                            <div class="chair yellow-chair"></div>
                                            <p class="text-white font-weight-700">Ghế bạn chọn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-9 col-md-12 mt-4">
                                <div class="row ds-avaiChair">
                                    <?php
                                    $data = getAllData('SElECT maGhe FROM ghe', 1);
                                    foreach ($data as $value) {
                                    ?>
                                        <div class="col-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="ds-boxseat">
                                                        <div class="chair red-chair text-white" id="<?php echo $value['maGhe'] ?>"><?php echo $value['maGhe'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </div>

        <div class="footer">
            <div class="logo">
                <img src="./img/in_footer.jpg" alt="Drolcinema cinema logo">
            </div>
            <div class="info">
                <div class="ket_noi_voi_chung_toi info_child">
                    <div class="row">
                        <div class="col-md-12 offset-md-2">LIÊN KẾT</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            <a class="iconLK" href="https://www.facebook.com/profile.php?id=100082986265800"><img src="./img/icon_facebook.png"></a>
                            <a class="iconLK" href="https://www.youtube.com/watch?v=a7halJDYJPU&ab_channel=SaigonT%E1%BA%BFu"><img src="./img/icon_youtube.png"></a>
                        </div>
                    </div>
                </div>
                <div class="thong_tin_lien_he info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">THÔNG TIN LIÊN HỆ</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            <a href="#" style="text-decoration: none">Email: drolcinema@gmail.com </a><br>
                            <a href="#" style="text-decoration: none">Hotline: 1800 1267</a> <br>
                            <a href="#" style="text-decoration: none">Giờ làm việc: 7:00 - 23:00 (Tất cả các ngày trong tuần)</a>
                        </div>
                    </div>
                </div>
                <div class="thanh_vien info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">THÀNH VIÊN</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            <a href="#" style="text-decoration: none">Thông tin tài khoản </a><br>
                            <a href="#" style="text-decoration: none">Lịch sử mua vé</a> <br>
                            <a href="#" style="text-decoration: none">Đánh giá</a>
                            <!-- <a href=""></a> -->
                        </div>
                    </div>
                </div>
                <div class="dieu_khoan_su_dung info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">ĐIỂU KHOẢN SỬ DỤNG</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            <a href="#" style="text-decoration: none">Điều khoản chung</a><br>
                            <a href="#" style="text-decoration: none">Điều khoản giao dịch</a><br>
                            <a href="#" style="text-decoration: none">Chính sách thanh toán</a><br>
                            <a href="#" style="text-decoration: none">Chính sách bảo mật</a><br>
                            <a href="#" style="text-decoration: none">Câu hỏi thường gặp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>iv>

    </div>


    <script>
        var bapnuoc = "";
        $(".btn-promotion").click(function() {
            let text = "Bạn đồng ý mua sản phẩm này không!";
            if (confirm(text) == true) {
                bapnuoc = $(this).attr("id");
               
            }
        });


        $(".red-chair").click(function() {
            let text = "Bạn đồng ý mua vé ghế này chứ!";
            if (confirm(text) == true) {
                var xc = $(".img-holder").attr("id");

                var maghe = $(this).attr("id");
                if (bapnuoc === "") {
                    var url = "booking.php" + "?id=" + maghe + "&xc=" + xc;
                } else {
                    var url = "booking.php" + "?id=" + maghe + "&xc=" + xc + "&bn=" + bapnuoc;
                }
                window.location.href = url;
            }
        });
    </script>
</body>