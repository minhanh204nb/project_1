<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="?action=insert_room" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add Room</a>
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
foreach ($listroom as $room) :?>
<tr>
<th><?php echo $room['id_room']  ?></th>
<th><?php echo $room['name_room']  ?></th>
<th><?php echo $room['action']  ?></th>
<th><a href="?action=">update</a></th>
<th><a href="?action=delete_room&id_room=<?php echo $room['id_room']?>">delete</a></th>
</tr>

<?php endforeach  ?>

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

