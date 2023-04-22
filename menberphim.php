<?php
require_once('./utils.php');

if (!isset($_SESSION['username'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/sidebar_user.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/button2.css">



    <title>Thành Viên</title>

    <style>
        .body-content-member{
            display: flex;
            flex-wrap: wrap;
        }

        .card-img-top{
            height: 213px;
        }
    </style>
</head>

<body>

    <!-- Start a nav -->
    <div class="heading">
        <!-- Navbar -->
        <?php include_once('./navbar.php') ?>
    </div>
    <!-- End a nav -->

    <!-- Start a body -->

    <div class="container-fluid" style="margin-top:150px">
        <div class="row">
            <div class="col-sm-3">
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <img src="./img/picMember.png" alt="" class="avatar-user">
                            <button class="button-css1"><?php if (isset($_SESSION['username'])) echo $_SESSION['username']['ten']; ?></button>
                        </div>

                        <div class="col-12">
                            <button class="button-css">Phim của tôi</button>
                        </div>

                        <div class="col-12">
                            <img src="./img/ic-bapnuoc.png" alt="" class="avatar-user">
                            <button class="button-css">Bắp nước</button>
                        </div>

                        <div class="col-12">
                            <img src="./img/ic_star.png" alt="" class="avatar-user">
                            <button class="button-css">Thẻ thành viên</button>
                        </div>

                        <div class="col-12">
                            <img src="./img/ic_thongtin.png" alt="" class="avatar-user">
                            <button class="button-css">Thông tin cá nhân</button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="container">
                    <div class="col-12 row m-0 p-0">
                        <div class="buttonA">
                            <div class="btn"><a id="historyTicket" href="#">Vẽ đã mua</a></div>
                            <div class="btn"><a id="historyFilm" href="#">Phim đã xem</a></div>
                            <div class="btn"><a id="cardFilm" href="#">Đánh giá</a></div>
                        </div>
                        <div class="body-content-member col-12">
                            <?php

                            $data = getAllData('SElECT * FROM phim', 1);
                            foreach ($data as $item) {
                            ?>
                                <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= $item['anh'] ?>" alt="Card image" width="300px">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4 class="card-title overflow-text"><?= $item['tenPhim'] ?></h4>
                                                <p class="card-text overflow-text"><?= $item['gia'] ?> VND</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            <?php    } ?>


                            <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                <div class="card">
                                    <img class="card-img-top" src="./img/2.jpg" alt="Card image" width="300px">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4 class="card-title overflow-text">Name</h4>
                                            <p class="card-text overflow-text">Some example text.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                <div class="card">
                                    <img class="card-img-top" src="./img/3.jpg" alt="Card image" width="300px">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4 class="card-title overflow-text">Name</h4>
                                            <p class="card-text overflow-text">Some example text.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                <div class="card">
                                    <img class="card-img-top" src="./img/4.jpg" alt="Card image" width="300px" height="350px">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4 class="card-title overflow-text">Name</h4>
                                            <p class="card-text overflow-text">Some example text.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                <div class="card">
                                    <img class="card-img-top" src="./img/5.jpg" alt="Card image" width="300px">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4 class="card-title overflow-text">Name</h4>
                                            <p class="card-text overflow-text">Some example text.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                                <div class="card">
                                    <img class="card-img-top" src="./img/5.jpg" alt="Card image" width="300px">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4 class="card-title overflow-text">Name</h4>
                                            <p class="card-text overflow-text">Some example text.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="ads">
                        <h3 class="textads"> Phim sắp chiếu</h3>
                        <div class="row-2">
                            <div class="imgads">
                                <div class="card">
                                    <img class="card-img-top" src="./img/2.jpg" alt="Card image" width="200px">
                                </div>
                            </div>
                            <div class="imgads">
                                <div class="card">
                                    <img class="card-img-top" src="./img/3.jpg" alt="Card image" width="200px">
                                </div>
                            </div>
                        </div>
                        <h3 class="textads"> Phim yêu thích</h3>
                        <div class="row-2">
                            <div class="imgads">
                                <div class="card">
                                    <img class="card-img-top" src="./img/3.jpg" alt="Card image" width="200px">
                                </div>
                            </div>
                            <div class="imgads">
                                <div class="card">
                                    <img class="card-img-top" src="./img/15.jpg" alt="Card image" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End a body -->

        <!-- Start a footer -->
        <?php include_once('./footer.php') ?>
        <!-- End a footer -->

        <script src="./js/member.js"></script>
</body>

</html>