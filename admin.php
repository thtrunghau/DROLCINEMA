<?php
require_once('./utils.php');

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin']==false){
        header('location: index.php');
    }
}

if (!isset($_SESSION['admin'])){
    header('location: index.php');
};

$statementGetBill = "SELECT maHD,ngayDat,email,tongTien,maKM FROM hoadon";
$dataGetBill = getAllData($statementGetBill, 1); ?>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/sidebar_admin.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/modal_box.css">

    <script src="./js/admin.js">
    </script>

    <title>Admin DROL Cinema</title>
</head>

<body>

    <!-- Start a nav -->
    <div class="heading">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top mg" style="background-color:black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" width="100%" height="72px"></img></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav mr-auto heading">
                        <li class="nav-item active" id="bill"><a class="nav-link text-white" href="#">ADMIN</a></li>
                        <li class="nav-item" id="account"><a class="nav-link text-white" href="#">Tài khoản</a></li>
                        <li class="nav-item" id="film"><a class="nav-link text-white" href="#">Phim</a></li>
                        <li class="nav-item" id="cinema"><a class="nav-link text-white" href="#">Rạp</a></li>
                        <li class="nav-item" id="drink"><a class="nav-link text-white" href="#">Bắp nước</a></li>
                        <li class="nav-item" id="promotion-admin"><a class="nav-link text-white" href="#">Khuyến mãi</a></li>
                        <li class="nav-item" id="showtime"><a class="nav-link text-white" href="#">Suất chiếu</a></li>
                        <li class="nav-item" id="overall"><a class="nav-link text-white" href="#">Tổng quan</a></li>

                    </ul>

                    <ul class="nav navbar-nav mr-5 heading">
                        <li class="nav-item login-logout"><a class="nav-link text-white">

                                <?php

                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username']['ten'];
                                } else {
                                    echo "Đăng nhập";
                                }

                                ?>
                                <span> <img src="./img/ic_user.png" alt="" class="img-user"> </span></a></li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>
    <!-- End a nav -->
    <!-- Start a body -->
    <div class="body">

        <h2 class="header-admin">QUẢN LÝ HÓA ĐƠN</h2>

        <div class="info d-flex justify-content-end">
            <a class="btn-infomation box-shadow" data-toggle="modal" data-target="#addDataAdmin">Thêm thông tin</a>
        </div>

        <table class="table table-light table-hover">
            <thead class="thead-purple ">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày bán</th>
                    <th scope="col">Tổng hóa đơn</th>
                    <th scope="col">Mã khuyến mãi</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
            <?php
        $count = 0;
        foreach ($dataGetBill as $value) :

            $maHD = $value['maHD'];
            $email = $value['email'];
            $ngayDat = $value['ngayDat'];
            $tongTien = $value['tongTien'];
            $maKM = $value['maKM'];

        ?>

            <tr>
                <th scope="col">
                    <?php
                    echo $maHD;
                    ?>
                </th>
                <td contentEditable='true' class='edit' id="email_hoadon_<?php echo $maHD;?>_maHD"><?php echo $email; ?></td>
                <td contentEditable='true' class='edit' id="ngayDat_hoadon_<?php echo $maHD;?>_maHD"><?php echo $ngayDat; ?></td>
                <td contentEditable='true' class='edit' id="tongTien_hoadon_<?php echo $maHD;?>_maHD"><?php echo $tongTien ?></td>
                <td contentEditable='true' class='edit' id="maKM_hoadon_<?php echo $maHD;?>_maHD"><?php echo $maKM ?></td>
                <td>
                    <i class="fas fa-trash email taikhoan" id="<?php echo $value['email'] ?>"></i>
                </td>
            </tr>
        <?php endforeach; ?>

            </tbody>
        </table>

        <div class="box-model">
    <div class="modal fade" id="addDataAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addDataAdmin" style="text-align: center; ">Update dữ liệu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input name="email" id="email" class="form-control email " type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="ngayDat" class="col-form-label">Ngày bán</label>
                            <input name="ngayDat" id="ngayDat" class="form-control" type="date" placeholder="ngatDat">
                        </div>
                        <div class="form-group">
                            <label for="tongTien" class="col-form-label">Tổng hóa đơn</label>
                            <input name="tongTien" id="tongTien" class="form-control" type="text" placeholder="tongTien">
                        </div>
                        <div class="form-group">
                            <label for="maKM" class="col-form-label">Mã khuyến mãi</label>
                            <input name="maKM" id="maKM" class="form-control" type="text" placeholder="maKM">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-modal" onclick="addBill()">Send</button>
                    </div>
                </div>
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

    <script src="./js/login_logout.js"></script>
</body>

</html>