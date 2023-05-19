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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/booking.css">
    <link rel="stylesheet" href="./css/general.css">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <title>Đặt Vé</title>

</head>

<body>
    <div id="main">
        <div class="heading">
            <!-- Navbar -->
            <?php include_once('./navbar.php') ?>
        </div>

        <div class="content">
            <!--Button thanh trạng thái-->
            <div class="status">
                <div id="buttons">
                    <a href="#" class="btn btn-chonve">Chọn vé </a>
                    <a href="#" class="btn btn-chonghe">Chọn ghế</a>
                    <a href="#" class="btn btn-chondoan">Chọn đồ ăn</a>
                    <a href="#" class="btn btn-chonthanhtoan">Thanh toán</a>
                    <a href="#" class="btn btn-datvethanhcong">Đặt vé thành công</a>
                </div>
            </div>

            <!-- card-flim -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 ">
                        <div class="ds-form">
                            <div>
                                <div class="ds-form">
                                    <div class="card">
                                        <?php

                                        $maghe = $_GET['id'];
                                        $xc = $_GET['xc'];

                                        if (isset($_GET['bn'])) {
                                            $bn = $_GET['bn'];
                                            $statement1 = "SELECT gia FROM bapnuoc WHERE maBapNuoc= '$bn' ";

                                            $bapnuoc = getData($statement1, 1);

                                            $priceBN = $bapnuoc['gia'];
                                        } else {
                                            $bn = 0;
                                            $priceBN = 0;
                                        }
                                        $statement = "SELECT * FROM xuatchieu WHERE maXC= '$xc' ";



                                        $data = getAllData($statement, 1);




                                        foreach ($data as $value) :
                                            $maPhim = $value['maPhim'];
                                            $idFilm = getData("SELECT tenPhim, anh, gia,theLoai FROM phim WHERE  maPhim = $maPhim ", 1);
                                            $name = $idFilm['tenPhim'];
                                            $image = $idFilm['anh'];
                                            $theloai = $idFilm['theLoai'];
                                            $priceFilm = $idFilm['gia'];

                                            $total = $priceBN + $priceFilm;

                                            // $gioChieu = $value['giochieu'];
                                            $gioChieu = $value['ngaygio'];
                                            $maphong = $value['maPhong'];

                                            $maRap = $value['maRap'];
                                            $idMaRap = getData("SELECT diachi FROM rap WHERE  maRap = $maRap ", 1);
                                            $diachi = $idMaRap['diachi'];

                                            $code = $value['maXC'];


                                        ?>
                                            <img class="card-img-top" src="<?php echo $image ?>" alt="Card image" width="300px">
                                            <div class="card-body">
                                                <table class="table table-borderless table-ticket">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3" style="padding: 0 10px 10px 10px;">
                                                                <h4 class="card-ticket-title"><?php echo $name ?></h4>
                                                                <p class="card-ticket-subtitle purple-12"><?php echo $theloai ?></p>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="purple-12">
                                                            <td>Ngày</td>
                                                            <td>Giờ</td>
                                                            <td>Loại</td>
                                                        </tr>
                                                        <tr class="card-ticket-text">
                                                            <td>24/11</td>
                                                            <td><?php echo $gioChieu  ?></td>
                                                            <td>3D</td>
                                                        </tr>
                                                        <tr class="purple-12">
                                                            <td>Rạp</td>
                                                            <td>Hàng</td>
                                                            <td>Ghế</td>
                                                        </tr>
                                                        <tr class="card-ticket-text">
                                                            <td><?php echo $maphong ?></td>
                                                            <td>D</td>
                                                            <td class="getId" id="<?php echo $maghe  ?>"><?php echo $xc  ?></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">
                                                                <h4 class="purple-12" style="margin: 0; margin-top: 16px;">HAT Cinema</h4>
                                                                <p class="card-ticket-text "><?php echo $diachi ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <h4 class="purple-12" style="margin: 0; margin-top: 16px;">Tổng tiền</h4>
                                                                <p class="card-ticket-text"><?php echo " $total.vnd"; ?></p>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="qr-code">
                                                    <div class="text-code">
                                                        <p class="purple-12" style="margin: 0; margin-top: 16px;">Mã code</p>
                                                        <p class="card-ticket-text"><?php echo "123456789210" + $code ?></p>
                                                    </div>

                                                    <img src="./img/QR Code.png" alt="Qr code ticket">
                                                </div>
                                            </div>
                                            <img class="line" src="./img/line10.png" alt="Line">
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Create line -->
                    <div class="col-md-1 m-auto">
                        <div class="line-vertical">
                            <div class="vl"></div>
                        </div>
                    </div>

                    <!-- Notice of successful booking -->
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="ds-form pd-form">
                            <div>
                                <div class="ds-form">
                                    <img src="./img/ic_datvethanhcong.png" alt="" class="img-fluid mb-4">
                                    <div class="ds-line mb-4">
                                        <h1 class="titleDatVe ">ĐẶT VÉ THÀNH CÔNG</h1>
                                        <hr class="hr">
                                    </div>
                                    <p class=" mb-4 font-weight-300 text-white" style="height: 29px;">Bạn đặt vé thành công. Khi bạn đến rạp vui lòng trình vé cho nhân viên tại quầy vé</p>
                                    <p class=" mb-4 font-weight-300 text-white" style="height: 29px;">Chúc bạn có buổi xem phim vui vẻ </p>
                                    <h2 class="titleThanks fontSize-24   ">DROL CINEMA xin chân thành cảm ơn</h2>

                                    <div class="cssFvFilm">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 text-white">
                                                    <p class="m-auto">Phim yêu thích</p>
                                                </div>

                                                <div class="ds-fvfilm">
                                                    <img src="./img/4.jpg" alt="" class="img-fluid img-film">
                                                </div>

                                                <div class="ds-fvfilm">
                                                    <img src="./img/1.jpg" alt="" class="img-fluid img-film">
                                                </div>

                                                <div class="ds-fvfilm">
                                                    <img src="./img/2.jpg" alt="" class="img-fluid img-film">
                                                </div>

                                                <div class="ds-fvfilm">
                                                    <img src="./img/3.jpg" alt="" class="img-fluid img-film">
                                                </div>

                                                <div class="ds-fvfilm">
                                                    <img src="./img/5.jpg" alt="" class="img-fluid img-film">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer of page -->
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

</body>