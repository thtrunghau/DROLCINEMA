<?php

    require_once('./utils.php');
    
    $statementFilmComing = "SELECT * FROM phim WHERE trangThai = 0 ORDER BY maPhim DESC LIMIT 4";
    $dataFilmComing = getAllData( $statementFilmComing,1);
    $statementFilmNow = "SELECT * FROM phim WHERE trangThai = 1 ORDER BY maPhim DESC LIMIT 4";
    $dataFilmNow = getAllData( $statementFilmNow,1);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- version 5. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- down file -> link -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- down file -> link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">

    <title>DROL CINEMA</title>


</head>

<body>

     <?php include_once('./navbar.php') ?> 
    <!-- Start a carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators  sửa: tự chuyển--> 
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

    <!-- Start a coming soon -->
    <div class="container show-film">
        <div class="row heading-film">
            <div class="col-6">
                <h3 class="font-weight-700 text-white title-large">PHIM SẮP CHIẾU</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="./upcoming.php" class=" btn-xemthem text-white font-weight-700">Xem thêm</a>
            </div>
        </div>
        <div class="row">
            
        <?php  foreach ($dataFilmNow as $value):  ?>
            
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" id = "<?php echo $value['maPhim']?>" >                
                <img class="card-img-top" style="height: 213px" src="<?php echo $value['anh'];?>" alt="Card image" width="300px">
                <div class="card-body">
                    <a href="#">
                        <h4 class="card-title overflow-text"><?php echo $value['tenPhim']; ?></h4>
                        <p class="card-text overflow-text"><?php echo $value['theLoai']; ?></p>
                    </a>
                </div>
            </div>
        </div>
        
        <?php endforeach;?>

        </div>
    </div>
    </div>
    <!-- End  a coming soon -->

    <!-- Start a coming soon -->
    <div class="container show-film">
        <div class="row heading-film">
            <div class="col-6">
                <h3 class="font-weight-700 text-white title-large">PHIM ĐANG CHIẾU</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="./nowShowing.php" class=" btn-xemthem text-white font-weight-700">Xem thêm</a>
            </div>
        </div>
        <div class="row">

            <?php  foreach ($dataFilmComing as $value):  ?>
            
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" id = "<?php echo $value['maPhim']?>">                
                    <img class="card-img-top" style="height: 213px" src="<?php echo $value['anh'];?>" alt="Card image" width="300px">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title overflow-text"><?php echo $value['tenPhim']; ?></h4>
                            <p class="card-text overflow-text"><?php echo $value['theLoai']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php endforeach;?>
        </div>
    </div>
    </div>
    <!-- End  a coming soon -->
    
    <!-- Start a promotion -->
    <div class="container show-film" style="margin-bottom: 6.563em; ">
        <div class="row">
            <div class="col-12">
                <p class="header">Khuyến mãi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row  content-promotion content-promotion-large">
                    <img class="img-promotion-large" src="./img/promotion.png">
                </div>
                <div class="row content-promotion content-promotion-large">
                    <img class="img-promotion-large" src="./img/promotion.png">
                </div>
            </div>
            <div class="col-3">
                <div class="row">

                    <div class="col-12 content-promotion content-promotion-small">
                        <img src="./img/22.png">   <!-- thay ảnh -->
                    </div>

                    <div class="col-12 content-promotion content-promotion-small">
                        <img src="./img/22.png"> <!-- thay ảnh -->
                    </div>

                    <div class="col-12 content-promotion content-promotion-small">
                        <img src="./img/22.png">  <!-- thay ảnh -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End a promotion -->

    <!-- Start footer -->
    <?php include_once('./footer.php') ?>
    <!-- End footer -->
</body>

<script src="./js/handleGoToDetail.js">

</script>
</html>