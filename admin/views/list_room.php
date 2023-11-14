<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <button><a href="?action=name_room">INSERT ROOM</a></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr>
                                            <th>ID</th>
                                            <th>name_room </th>
                                            <th>action</th>
                                            <th colspan="2">ACTION</th>
                                        </tr>
                                        <?php
foreach ($listroom as $room) {
    $update_room = "index.php?action=update_room&id" . $room['id_room'];
    $delete_room = "index.php?action=delete_room&id" . $room['id_room'];
    echo "<tr>";
    echo "<td>" . $room["id_room"] . "</td>";
    echo "<td>" . $room["name_room"] . "</td>";
    echo "<td>" . $room["action"] . "</td>";
    echo "<td class='edit-delete-btn'>
    <a href='" . $update_room . "' class='text-success'><i class='feather-edit-3 me-1'></i> Edit</a>
    <a href='" . $delete_room . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");' class='text-danger' data-bs-toggle='modal' data-bs-target='#deleteModal'><i class='feather-trash-2 me-1'></i> Delete</a></td>";
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

