<?php
require_once('../utils.php');

$statementGetCinema = "SELECT maRap, diachi, COUNT(maPhong) AS 'sophong' FROM rap GROUP BY maRap";
$dataGetCinema = getAllData($statementGetCinema, 1); ?>
<h2 class="header-admin">QUẢN LÝ RẠP PHIM</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow" data-toggle="modal" data-target="#addDataAdmin">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số lượng phòng</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetCinema as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maRap']; ?></th>
                <td contentEditable='true'  class='edit' id="diachi_rap_<?php echo $value['maRap'] ?>_maRap"><?php echo $value['diachi']; ?></td>
                <td><?php echo $value['sophong']; ?></td>
                <td>
                    <i class="fas fa-trash maRap rap" id="<?php echo $value['maRap'] ?>"></i>
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
                        <label for="maPhong" class="col-form-label">Mã phòng</label>
                        <input name="maPhong" id="maPhong" class="form-control" type="number" placeholder="Mã phòng">
                    </div>
                    <div class="form-group">
                        <label for="diaChi" class="col-form-label">Địa chỉ</label>
                        <input name="diaChi" id="diaChi" class="form-control" type="text" placeholder="Địa chỉ">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal" onclick = "addCinema()">Send</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="./js/admin.js">


<?php ?>