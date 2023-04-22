<?php
include_once('../utils.php');
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
<script src="./js/admin.js">
