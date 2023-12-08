<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="index.php?action=insert_combo" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i>THÊM COMBO</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr style="text-align: center;">
                                            <th>STT</th>
                                            <th>TÊN COMBO</th>
                                            <th>HÌNH ẢNH COMBO</th>
                                            <th>GIÁ COMBO</th>
                                            <th colspan="1">MÔ TẢ</th>
                                            <th colspan="4">CHỨC NĂNG</th>
                                        </tr>
                                        <?php
                                        foreach ($list_combo as $combo) {
                                            extract(($combo));
                                            $edit_combo = "index.php?action=edit_combo&id=" . $combo['id_combo'];
                                            $delete_combo = "index.php?action=delete_combo&id=" . $combo['id_combo'];
                                            $hinhpath = "../uploads/combo/" . $combo['img_combo'];
                                            if (is_file($hinhpath)) {
                                                $img_combo = "<img src='" . $hinhpath . "' height='80px'>";
                                            } else {
                                                $img_combo = "no photo";
                                            }
                                            $stt++;
                                            echo "<tr>";
                                            echo "<td>" . $stt . "</td>";
                                            echo "<td>" . $combo["name_combo"] . "</td>";
                                            echo "<td>" . $img_combo . "</td>";
                                            echo "<td>" . $combo["price_combo"] . "</td>";
                                            echo "<td>" . $combo["mota"] . "</td>";
                                            echo "<td class='edit-delete-btn'>
                                            <a href='" . $edit_combo . "' class='text-success'><i class='feather-edit-3 me-1'></i>SỬA</a>
                                            <a href='" . $delete_combo . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");' class='text-danger' data-bs-toggle='modal' data-bs-target='#deleteModal'><i class='feather-trash-2 me-1'></i>XÓA</a></td>";
                                            echo "</tr>";
                                        }
                                        // 
                                        ?>
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

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>List Combo</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>