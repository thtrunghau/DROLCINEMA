<?php
require_once('../utils.php');

$statementGetAccount = "SELECT email,ten,admin,sdt FROM taikhoan";
$dataGetAccount = getAllData($statementGetAccount, 1); ?>
<h2 class="header-admin">QUẢN LÝ TÀI KHOẢN</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow" data-toggle="modal" data-target="#addDataAdmin">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Loại tài khoản</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($dataGetAccount as $value) :  ?>
            <tr>
                <?php $email = $value['email'];
                $count = $count += 1;
                $ten = $value['ten'];
                $sdt = $value['sdt'];
                $admin = $value['admin']?>
                
                <th scope="col"><?php echo $count?></th>
                <td contentEditable='true' class='edit' id="ten_taikhoan_'<?php echo $email ?>'_email"><?php echo $ten; ?></td>
                <td id="email_'<?php echo $email; ?>'"><?php echo $email; ?></td>
                <td contentEditable='true' class='edit' id="sdt_taikhoan_'<?php echo $email; ?>'_email"><?php echo $sdt; ?></td>
                <td contentEditable='true' class='edit adminAccount' id="admin_taikhoan_'<?php echo $email?>'_email"><?php if ($admin == 0) echo "User";
                    else echo "Admin"; ?></td>
                <td>
                    <i class="fas fa-trash email taikhoan" id="<?php echo $email; ?>"></i>
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
                            <h4 class="modal-title" id="addDataAdmin" style="text-align: center; ">Thêm dữ liệu</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>

                        <div class="modal-body">
                    
                    <div class="form-group">
                        <label for="email" class="col-form-label" >Email</label>
                        <input name="email" id="email" class="form-control" type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="matKhau" class="col-form-label">Mật khẩu</label>
                        <input name="matKhau" id="matKhau" class="form-control" type="text" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="ten" class="col-form-label">Tên người dùng</label>
                        <input name="ten" id="ten" class="form-control" type="text" placeholder="Tên người dùng">
                    </div>
                    <div class="form-group">
                        <label for="sdt" class="col-form-label">Số điện thoại</label>
                        <input name="sdt" id="sdt" class="form-control" type="text" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                    <label for="" class="col-form-label"> Loại tài khoản</label><br>
                        <input type="radio" class="" name="admin" id="user" value="0">
                        <label for="user"> User</label><br>
                        <input type="radio" class="" name="admin" id="admin" value="1">
                        <label for="admin"> Admin</label><br>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="updateAccount" class="btn btn-primary btn-modal" onclick="addAccount()">Send</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</div>
<script src="./js/admin.js">
    <?php ?>