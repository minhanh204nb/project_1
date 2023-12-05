<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Tài khoản</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Thống kê</a></li>
                        <li class="breadcrumb-item"><a href="customers.html">Tài khoản</a></li>
                        <li class="breadcrumb-item active">Thêm tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin cơ bản</h4>
                        <form action="index.php?action=insert_account" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên người dùng</label>
                                        <input type="text" class="form-control" name="name_clinet" placeholder="Name clinet">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" name="phone_number" placeholder="Phone number">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="user" placeholder="User">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <input type="text" class="form-control" name="action" value="Hoạt động">
                                    </div>
                                    <div class="form-group">
                                        <label>Quyền</label>
                                        <?php
                                        $role = "User";
                                        if ($role == "admin") {
                                            $role = "1";
                                        }
                                        ?>
                                        <input type="text" class="form-control" name="role" value="<?php echo $role ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <input type="submit" class="btn btn-primary" name="insert" value="Thêm tài khoản">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>