<?php
require_once('../utils.php');

$statement = "SELECT SUM(tongTien) as total FROM hoadon;";
$total = getData($statement, 1);

$statement = "Select Year(ngayDat) as 'nam', Sum(tongTien) as 'doanhThu' From hoadon Group by Year(ngayDat)";
$totalYear = getAllData($statement,1);


$statement = "SELECT chitiethoadon.maBapNuoc, tenSP, sum(soluongBapNuoc)*gia as doanhThuBapNuoc FROM chitiethoadon left join bapnuoc on bapnuoc.maBapNuoc = chitiethoadon.maBapNuoc GROUP by maBapNuoc";
$totalDrink = getAllData($statement,1);


$statement = "SELECT phim.maPhim,tenPhim,sum(phim.gia)as tien FROM phim join xuatchieu join chitiethoadon on chitiethoadon.maXC = xuatchieu.maXC AND phim.maPhim = xuatchieu.maPhim GROUP by (phim.maPhim);";
$totalFilm = getAllData($statement,1);

$statementGetBill = "SELECT maHD,ngayDat,email,tongTien,maKM FROM hoadon";
$dataGetBill = getAllData($statementGetBill, 1); ?>

<h2 class="header-admin">TỔNG QUAN</h2>

<div class="d-flex justify-content-Start align-items-end" style="color: #fff;">
<h5>Tổng doanh thu: </h5>
<h3 style="font-weight: bold; padding-left: 10px;"> <?php echo $total['total']; ?></h3>
</div>

<h3 class="table-header-overall">Tổng doanh thu theo năm</h3>
<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Năm</th>
            <th scope="col">Doanh thu</th>
        </tr>
    </thead>
    <tbody>

        <?php 
        $count = 0;
        foreach ($totalYear as $value): 
           $count+=1; ?>
        <tr>
            <th><?php echo $count ?></th>
            <td><?php echo $value['nam'];?></td>
            <td><?php echo( $value['doanhThu']); ?></td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<h3 class="table-header-overall">Tổng doanh thu Bắp nước</h3>
<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã bắp nước</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Doanh thu</th>
        </tr>
    </thead>
    <tbody>

        <?php 
        $count = 0;
        foreach ($totalDrink as $value): 
           $count+=1; ?>
        <tr>
            <th><?php echo $count ?></th>
            <td><?php echo $value['maBapNuoc'];?></td>
            <td><?php echo( $value['tenSP']); ?></td>
            <td><?php echo( $value['doanhThuBapNuoc']); ?></td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<h3 class="table-header-overall">Tổng doanh thu Phim</h3>
<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã phim</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Doanh thu</th>
        </tr>
    </thead>
    <tbody>

        <?php 
        $count = 0;
        foreach ($totalFilm as $value): 
           $count+=1; ?>
        <tr>
            <th><?php echo $count ?></th>
            <td><?php echo $value['maPhim'];?></td>
            <td><?php echo( $value['tenPhim']); ?></td>
            <td><?php echo( $value['tien']); ?></td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>
<?php ?>