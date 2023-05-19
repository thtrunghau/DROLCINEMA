<?php
require_once('../utils.php');

$statementGetDrink = "SELECT * FROM xuatchieu";
$dataGetDrink = getAllData($statementGetDrink, 1); ?>


<h2 class="header-admin">QUẢN LÝ XUẤT CHIẾU</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow" data-toggle="modal" data-target="#addDataAdmin">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Phim</th>
            <th scope="col">Phòng</th>
            <th scope="col">Rạp</th>
            <th scope="col">Thời gian</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetDrink as $value) :  
            $maPhim = $value['maPhim'];
            $statementGetNameFilm = "SELECT tenphim FROM phim WHERE maPhim = '$maPhim'";
        $dataFilm = getData($statementGetNameFilm, 1); ?>
            <tr>
                <th scope="col"><?php echo $value['maXC']; ?></th>
                <td contentEditable='true'  class='edit' id="phim_xuatchieu_<?php echo $value['maXC']; ?>_maXC"><?php echo($dataFilm['tenphim']); ?></td>
                <td contentEditable='true'  class='edit' id="maPhong_xuatchieu_<?php echo $value['maXC']; ?>_maXC"><?php echo $value['maPhong']; ?></td>
                <td contentEditable='true'  class='edit' id="maRap_xuatchieu_<?php echo $value['maXC']; ?>_maXC"><?php echo $value['maRap']; ?></td>
                <td contentEditable='true'  class='edit' id="ngayGio_xuatchieu_<?php echo $value['maXC']; ?>_maXC"><?php echo $value['ngaygio']; ?></td>

                <td>
                    <i class="fas fa-trash maXC xuatchieu" id="<?php echo $value['maXC']?>"></i>
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
                        <label for="ngaygio" class="col-form-label">Ngày giờ chiếu</label>
                        <input name="ngaygio" id="ngaygio" class="form-control" type="date" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="maPhong" class="col-form-label">Mã Phòng</label>
                        <input name="maPhong" id="maPhong" class="form-control" type="text" placeholder="Mã Phòng">
                    </div>
                    <div class="form-group">
                        <label for="maPhim" class="col-form-label">Mã Phim</label>
                        <input name="maPhim" id="maPhim" class="form-control" type="text" placeholder="Mã Phim">
                    </div>
                    <div class="form-group">
                        <label for="maRap" class="col-form-label">Mã Rạp</label>
                        <input name="maRap" id="maRap" class="form-control" type="text" placeholder="Mã Rạp">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal" onclick="addXuatChieu()">Send</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script src="./js/admin.js">


<?php ?>