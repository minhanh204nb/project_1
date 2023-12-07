<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="index.php?action=insert_room" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i>THÊM PHÒNG</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr>
                                            <th>STT</th>
                                            <th>TÊN PHÒNG</th>
                                            <th colspan="1">TRẠNG THÁI </th>
                                            <th colspan="2">CHỨC NĂNG</th>
                                        </tr>
                                        <?php
                                        foreach ($list_room as $room) {
                                            extract(($room));
                                            $edit_room = "index.php?action=edit_room&id=" . $room['id_room'];
                                            $delete_room = "index.php?action=delete_room&id=" . $room['id_room'];
                                            if ($room['action_room'] == 0) {
                                                $room['action_room'] = "Hoạt động";
                                            } else {
                                                $room['action_room'] = "Không hoạt động";
                                            }
                                            $stt++;
                                            echo "<tr>";
                                            echo "<td>" . $stt . "</td>";
                                            echo "<td>" . $room["name_room"] . "</td>";
                                            echo "<td>" . $room["action_room"] . "</td>";
                                            echo "<td class='edit-delete-btn'>
                                            <a href='" . $edit_room . "' class='text-success'><i class='feather-edit-3 me-1'></i>SỬA</a>
                                            <a href='" . $delete_room . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");' class='text-danger' data-bs-toggle='modal' data-bs-target='#deleteModal'><i class='feather-trash-2 me-1'></i>XÓA</a></td>";
                                            echo "</tr>";
                                        }
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
    <title>List room</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>