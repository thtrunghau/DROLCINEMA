<?php
require_once('../utils.php');

$statementGetPromotion = "SELECT * FROM khuyenmai";
$dataGetPromotion = getAllData($statementGetPromotion, 1); ?>
print_r($dataGetPromotion);
<h2 class="header-admin">QUẢN LÝ KHUYẾN MÃI</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow" data-toggle="modal" data-target="#addDataAdmin">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên khuyến mãi</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Ngày kết thúc</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetPromotion as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maKM']; ?></th>
                <td contentEditable='true'  class='edit' id="chuDe_khuyenmai_<?php echo $value['maKM']; ?>_maKM"><?php echo $value['chuDe']; ?></td>
                <td contentEditable='true'  class='edit' id="chuDe_khuyenmai_<?php echo $value['maKM']; ?>_maKM"><?php echo $value['noiDung']; ?></td>
                <td contentEditable='true'  class='edit' id="chuDe_khuyenmai_<?php echo $value['maKM']; ?>_maKM"><?php echo $value['anh']; ?></td>
                <td contentEditable='true'  class='edit' id="chuDe_khuyenmai_<?php echo $value['maKM']; ?>_maKM"><?php echo $value['ngayBD']; ?></td>
                <td contentEditable='true'  class='edit' id="chuDe_khuyenmai_<?php echo $value['maKM']; ?>_maKM"><?php echo $value['ngayKT']; ?></td>
                <td>
                    <i class="fas fa-trash maKM khuyenmai" id="<?php echo $value['maKM'] ?>"></i>
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
                        <label for="chuDe" class="col-form-label">Tên khuyến mãi</label>
                        <input name="chuDe" id="chuDe" class="form-control" type="text" placeholder="Tên khuyến mãi">
                    </div>
                    <div class="form-group">
                        <label for="noiDung" class="col-form-label">Nội dung</label>
                        <textarea class="form-control" id="noiDung">Nội dung</textarea>
                    </div>
                    <div class="form-group">
                        <label for="anh" class="col-form-label">Link ảnh</label>
                        <input name="anh" id="anh" class="form-control" type="text" placeholder="Link ảnh">
                    </div>
                    <div class="form-group">
                        <label for="ngayBD" class="col-form-label">Ngày bắt đầu</label>
                        <input name="ngayBD" id="ngayBD" class="form-control" type="date">
                    </div>
                    <div class="form-group">
                        <label for="ngayKT" class="col-form-label">Ngày kết thúc</label>
                        <input name="ngayKT" id="ngayKT" class="form-control" type="date">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal" onclick="addKhuyenMai()">Send</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="./js/admin.js">


<?php ?>