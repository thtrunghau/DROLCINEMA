<?php
include_once('./utils.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top mg" style="background-color:black;">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" width="100%" height="72px"></img></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav mr-auto heading">
                <li class="nav-item active"><a class="nav-link text-white" href="./nowShowing.php">PHIM ĐANG CHIẾU</a></li> 
                <li class="nav-item"><a class="nav-link text-white" href="./upcoming.php">PHIM SẮP CHIẾU</a></li> 
                <li class="nav-item active"><a class="nav-link text-white" href="./nowShowing.php">MUA VÉ</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./nowShowing.php">RẠP PHIM</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./promotion.php">KHUYẾN MÃI</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./menberphim.php">THÀNH VIÊN</a></li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 test" action="searchResult.php" method="post">
                        <img src="./img/ic_search.png" alt="" class="img-search">
                        <input class="form-control input-search" name="search" type="search" aria-label="Search" size=25;>
                    </form>
                </li>
            </ul>

            <ul class="nav navbar-nav mr-5 heading">
               <li class="nav-item login-logout"><a class="nav-link text-white" >

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

<script src="./js/login_logout.js"></script>

<?php ?>