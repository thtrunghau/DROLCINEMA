<?php
require_once('../utils.php');

    $statement = "SELECT SUM(tongTien) FROM hoadon";
    $total = getData($statement,0);
    echo $total;


$statementGetBill = "SELECT maHD,ngayDat,email,tongTien,maKM FROM hoadon";
$dataGetBill = getAllData($statementGetBill, 1); ?>
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
                    <i class="fas fa-trash maHD hoadon" id="<?php echo $value['maHD'] ?>"></i>
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
<script src="./js/admin.js">
    <?php ?>