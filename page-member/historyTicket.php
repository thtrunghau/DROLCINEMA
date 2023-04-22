<?php
require_once('../utils.php');
$user = $_SESSION['email-user'];
$statementGetBill = "SELECT * FROM hoadon WHERE email='$user'";
$dataGetBill = getAllData($statementGetBill, 1); 
?>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã hóa đơn</th>
            <th scope="col">Ngày mua</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Khuyến mãi</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($dataGetBill as $value) :  ?>
            <tr>
                <?php 
                $count = $count += 1; ?>
  
                <th scope="col"><?php echo $count?></th>
                <td ><?php echo $value['maHD']; ?></td>
                <td ><?php echo $value['ngayDat']; ?></td>
                <td ><?php echo $value['tongTien']; ?></td>
                <td ><?php echo $value['maKM']; ?></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<script src="./js/admin.js">
    <?php ?>