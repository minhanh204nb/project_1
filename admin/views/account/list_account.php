<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Tài khoản</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php?action=dashboard">Thống kê</a>
                        </li>
                        <li class="breadcrumb-item active">Tài khoản</li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a href="index.php?action=insert_account" class="btn btn-primary me-1">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i class="fas fa-search"></i><input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-center table-hover datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="thead-light">
                                                <tr role="row">
                                                    <th>Tên người dùng</th>
                                                    <th>Email</th>
                                                    <th>Tên tài khoản</th>
                                                    <th>Mật khẩu</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Quyền</th>
                                                    <th class="text-end" colspan="2">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($list_account as $account) {
                                                    extract(($account));
                                                    echo '<tr role="row" class="odd">';
                                                    echo '<td class="sorting_1">';
                                                    echo '<h2 class="table-avatar">';
                                                    echo '<a href="index.php?action=edit_account" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/avatar.jpg" alt="User Image"></a>';
                                                    echo '<a href="index.php?action=edit_account">' . $account['name_clinet'] . '<span>' . $account['phone_number'] . '</span></a>';
                                                    echo '</h2>';
                                                    echo '</td>';
                                                    echo '<td><a href="mailto:' . $account['email'] . '" class="__cf_email__">' . $account['email'] . '</a></td>';
                                                    echo '<td>' . $account['user'] . '</td>';
                                                    echo '<td>' . $account['password'] . '</td>';
                                                    echo '<td>' . $account['address'] . '</td>';
                                                    $role = "";
                                                    if ($account['role'] == 1) {
                                                        $role = 'admin';
                                                    } else {
                                                        $role = 'user';
                                                    }
                                                    echo '<td><span class="badge badge-pill bg-success-light">' . $role . '</span></td>';
                                                    echo '<td class="text-end">';
                                                    $edit_account = "index.php?action=edit_account&id=" . $account['id_account'];
                                                    $delete_account = "index.php?action=delete_account&id=" . $account['id_account'];
                                                    echo '<a href="' . $edit_account . '"  class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i>Sửa</a>';
                                                    echo '<a href="' . $delete_account . '"onclick="return confirm(\'Bạn có chắc muốn xóa?\');" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Xóa</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>