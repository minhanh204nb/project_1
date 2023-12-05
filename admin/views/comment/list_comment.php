<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Bình luận</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Thống kê</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
                    </ul>
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
                                    <div class="col-sm-12">
                                        <table class="table table-stripped table-hover datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="thead-light">
                                                <tr role="row">
                                                    <th>STT</th>
                                                    <th>Tên người dùng</th>
                                                    <th>Nội dung</th>
                                                    <th>Thời gian</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $stt = 1;
                                                foreach ($list_comment as $comment) {
                                                    extract(($comment));
                                                    echo ' <tr role="row" class="odd">';
                                                    $delete_comment = "index.php?action=delete_comment&id=" . $comment['id_comment'];
                                                    $edit_comment = "index.php?action=edit_comment&id=" . $comment['id_comment'];
                                                    echo ' <td>' . $stt++ . '</td> ';
                                                    echo ' <td>' . $comment['name_user'] . '</td> ';
                                                    echo ' <td> <textarea name="" id="" cols="30" rows="5">' . $comment['content'] . '</textarea> </td> ';
                                                    echo ' <td>' . $comment['date_submit'] . '</td> ';
                                                    echo '<td>';
                                                    echo '<a href="' . $edit_comment . '" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i>Sửa</a>';
                                                    echo ' <a class="btn btn-sm btn-white text-danger" href="' . $delete_comment . '"  data-bs-toggle="modal" data-bs-target="#delete_paid"><i class="far fa-trash-alt me-1"></i>Xóa</a>';
                                                    echo '</td>';
                                                    echo ' </tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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
<style>
    tr {
        cursor: pointer;
    }

    textarea {
        border: none;
    }
</style>