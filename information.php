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
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./css/information.css">
    <title>HAT CINEMA</title>
</head>

<body>
    <div class="main">

        <?php include_once('./navbar.php') ?>

        <!-- Start a carousel -->
        <div class="content">
            <div class="container text-white">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                        </div>
                    </div>
                </div>

                <?php


                $getId = $_GET['id'];

                $statement = "SELECT * FROM phim WHERE  maPhim = '$getId' ";

                $data = getAllData($statement, 1);

                foreach ($data as $value) {
                ?>

                    <div class="row">
                        <div class="col-5 mb-5">
                            <div class="image">
                                <image class="css-img" src="<?php echo $value['anh'] ?>" alt="Hinh anh phim"></image>
                                <div class="btn-buy" id="<?php echo $value['maPhim'] ?>">
                                    <div class="btn">Mua vé</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="detail">
                                <h1 style="font-size: 50px; text-transform:uppercase;"> <?php echo $value['tenPhim'] ?></h1>
                                <p>Đạo diễn: <?php echo $value['daoDien'] ?></p>
                                <p>Quốc gia: <?php echo $value['quocGia'] ?></p>
                                <p>Nhà sản xuất: <?php echo $value['hangPhim'] ?></p>
                                <p>Diễn viên: <?php echo $value['dienVien'] ?></p>
                                <p>Thể loại: <?php echo $value['theLoai'] ?></p>
                                <p>Thời lượng: <?php echo $value['thoiLuong'] ?></p>
                                <p>Ngày khởi chiếu: <?php echo $value['ngayBD'] ?></p>
                                <p>Nội dung: <?php echo $value['noiDung'] ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="trailer">
                                <h2>Trailer</h2>
                                <iframe width="560" height="315" src="<?php echo $value['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>

        <!-- End a promotion -->
        <?php include_once('./footer.php') ?>
        <!-- Start footer -->
        <!-- End footer -->
    </div>

</body>

<script>
    $(document).ready(function(){
    $(".btn-buy").click(function(){
        var phim = $(this).attr("id");
        var url = "Bookingticket.php" + "?id=" + phim;
        window.location.href = url;
    });
});

</script>

</html>