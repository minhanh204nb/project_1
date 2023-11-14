<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <button><a href="index.php?action=insert_category">INSERT CINEMA</a></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME CINEMA  </th>
                                            <th>ADDRESS</th>
                                            <th>LINK_GOOGLE</th>
                                            <th colspan="2">ACTION</th>
                                        </tr>
                                        <?php
                                        foreach ($list_cinema as $cinema) {
                                            $update_cinema = "index.php?action=update_cinema&id" . $cinema['id_cinema'];
                                            $delete_cinema = "index.php?action=delete_cinema&id" . $cinema['id_cinema'];
                                            echo "<tr>";
                                            echo "<td>" . $cinema["id_cinema"] . "</td>";
                                            echo "<td>" . $cinema["action"] . "</td>";
                                            echo "<td>" . $cinema["total_seats"] . "</td>";
                                            echo "<td> <a href='" . $update_cinema . "'><input type='button' value='update'></a> <a href='" . $delete_cinema  . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");'><input type='button' value='delete'></a> </td>";
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

