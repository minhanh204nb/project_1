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
    echo "<td> <a href='" . $update_room . "'><input type='button' value='update'></a> <a href='" . $delete_room . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");'><input type='button' value='delete'></a> </td>";
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

