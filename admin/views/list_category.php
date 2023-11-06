<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <button><a href="index.php?action=insert_category">INSERT CATEGORY</a></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME CATEGORY</th>
                                            <th colspan="2">ACTION</th>
                                        </tr>
                                        <?php
                                        foreach ($list_category as $category) {
                                            $update_category = "index.php?action=update_category&id" . $category['id_category'];
                                            $delete_category = "index.php?action=delete_category&id" . $category['id_category'];
                                            echo "<tr>";
                                            echo "<td>" . $category["id_category"] . "</td>";
                                            echo "<td>" . $category["name_category"] . "</td>";
                                            echo "<td> <a href='" . $update_category . "'><input type='button' value='update'></a> <a href='" . $delete_category . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");'><input type='button' value='delete'></a> </td>";
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