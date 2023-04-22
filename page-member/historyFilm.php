<?php
require_once('../utils.php');
$user = $_SESSION['email-user'];
$statementGetFilm = "SELECT chitiethoadon.maHD, email, tenPhim, ngayDat,tongTien,maKM FROM chitiethoadon join hoadon join xuatchieu join phim on (chitiethoadon.maHD = hoadon.maHD)and(chitiethoadon.maXC = xuatchieu.maXC)AND(xuatchieu.maPhim = phim.maPhim) WHERE hoadon.email = '$user'";
$dataGetFilm = getAllData($statementGetFilm, 1); 
?>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã hóa đơn</th>
            <th scope="col">Email</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Ngày mua</th>
            <th scope="col">Tổng</th>
            <th scope="col">Mã khuyến mãi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($dataGetFilm as $value) :  ?>
            <tr>
                <?php 
                $count = $count += 1; ?>
  
                <th scope="col"><?php echo $count?></th>
                <td ><?php echo $value['maHD']; ?></td>
                <td ><?php echo $value['email']; ?></td>
                <td ><?php echo $value['tenPhim']; ?></td>
                <td ><?php echo $value['ngayDat']; ?></td>
                <td ><?php echo $value['tongTien']; ?></td>
                <td ><?php echo $value['maKM']; ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<script src="./js/admin.js">
    <?php ?>