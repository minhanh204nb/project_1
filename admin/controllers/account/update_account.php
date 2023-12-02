<?php
if (is_array($list_account)) {
    extract(($list_account));
}
?>
<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">TÀI KHOẢN</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?action=dashboard">THỐNG KÊ</a></li>
                        <li class="breadcrumb-item"><a href="index.php?action=account">TÀI KHOẢN</a></li>
                        <li class="breadcrumb-item active">CẬP NHẬT TÀI KHOẢN</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Info</h4>
                        <form action="index.php?action=update_account" method="post" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TÊN NGƯỜI DÙNG</label>
                                        <input type="text" class="form-control" name="name_clinet" value="<?php if(isset($name_clinet)&&($name_clinet!="")) echo $name_clinet?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php if(isset($email)&&($email!="")) echo $email?>">
                                    </div>
                                    <div class="form-group">
                                        <label>SỐ ĐIỆN THOẠI</label>
                                        <input type="text" class="form-control" name="phone_number" value="<?php if(isset($phone_number)&&($phone_number!="")) echo $phone_number?>">
                                    </div>
                                    <div class="form-group">
                                        <label>ĐỊA CHỈ</label>
                                        <input type="text" class="form-control" name="address" value="<?php if(isset($address)&&($address!="")) echo $address?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>TÊN ĐĂNG NHẬP</label>
                                        <input type="text" class="form-control" name="user" value="<?php if(isset($user)&&($user!="")) echo $user?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>MẬT KHẨU</label>
                                        <input type="text" class="form-control" name="password" value="<?php if(isset($password)&&($password!="")) echo $password?>">
                                    </div>
                                    <div class="form-group">
                                        <label>TRẠNG THÁI</label>
                                        <input type="text" class="form-control" name="action" value="<?php if(isset($action)&&($action!="")) echo $action?>">
                                    </div>
                                    <div class="form-group">
                                        <label>QUYỀN</label>
                                        <input type="text" class="form-control" name="role" value="<?php if(isset($role)&&($role!="")) echo $role?>">
                                        <input type="text" class="form-control" name="id_account" value="<?php if(isset($id_account)&&($id_account!="")) echo $id_account?>">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <input type="submit" name="update_account" class="btn btn-primary" value="CẬP NHẬT">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>