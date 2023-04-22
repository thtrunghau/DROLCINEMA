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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./css/Bookingticket.css">


    <title>DROL CINEMA</title>


</head>

<body>

    <?php include_once('./navbar.php')  ?>


    <!-- Start a carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel"> -->

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/banner-1.jpg" alt="Phim Kẻ Độc Hành" width="100%" height="666">
            </div>
            <div class="carousel-item">
                <img src="./img/banner-2.jpg" alt="Phim Avergea" width="100%" height="666">
            </div>
            <div class="carousel-item">
                <img src="./img/banner-3.jpg" alt="Phim Rio 2" width="100%" height="666">
            </div>
        </div>
    </div>
    <!-- End a carousel -->
    <!-- start content -->
    <div class="wrap-action">
        <div class="container">
            <div class="gr-action d-flex justify-content align-items-center">
                <div class="action-item active">
                    <a href="#">Chọn vé</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn ghế</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn vé</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn đồ ăn</a>
                </div>
                <div class="action-item">
                    <a href="#">Thanh toán</a>
                </div>
                <div class="action-item">
                    <a href="#">Đặt vé thành công</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-time">
        <div class="container">
            <!-- <div class="title-time text-center text-white">
                <span>Thứ 2,01/09/2022</span>
            </div> -->
            <div class="text-time">
                <span>Thời gian</span>
            </div>
            <div class="gr-time d-flex justify-content align-items-center flex-wrap">
                <div class="time-item active">
                    <span class="day">Thứ 2</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">Thứ 3</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">Thứ 4</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">Thứ 5</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">Thứ 6</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">Thứ 7</span>
                    <p class="mb-0 time">1-9</p>
                </div>
                <div class="time-item">
                    <span class="day">CN</span>
                    <p class="mb-0 time">1-9</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-offer">


        <div class="container">
            <div class="text-offer d-flex align-content-center justify-content-start">
                <span class="title">Rạp đề xuất</span>
                <span class="address">TP.Hồ Chí Minh</span>
            </div>
        </div>
        <div class="line1"></div>

        <?php
        $getId = $_GET['id'];

        $statement = "SELECT * FROM xuatchieu WHERE  maPhim = '$getId' ";
        $data = getAllData($statement, 1);
        $gioChieu = getAllData($statement, 1);

        foreach ($data as $value) :
            $id = $value['maRap'];
            $diachi = getData("SELECT diachi FROM rap WHERE  maRap = $id ", 1);
        ?>
       
        <div class="container">
            <div class="form-row  pt-5 pb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="item-left">
                            <div class="btn-offer"><a href="">Tìm vị trí</a></div>
                        </div>

                        <div class="item-right">
                            <p class="offer-desc mb-0">
                                <?php echo $diachi['diachi'] ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="tit-offer">2D Phụ đề</div>
                    <div class="gr-offer d-flex justify-content-start aling-items-center">
                        <?php foreach ($gioChieu as $time) :
                        ?>
                            <div class="item-offer" id="<?php echo $time['maXC'] ?>">
                                <span class="offer-time"> <?php echo $time['giochieu'] ?> </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>


    </div>

    <!-- end content -->

    <!-- Start footer -->
    <?php include_once('./footer.php') ?>
    <!-- End footer -->
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $(".item-offer").click(function() {
            var xc = $(this).attr("id");
            var url = "chonghe.php" + "?id=" + xc;
            window.location.href = url;
        });
    });
</script>

</html>