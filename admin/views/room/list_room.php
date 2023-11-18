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
foreach ($listroom as $room): ?>
<tr>
<th><?php echo $room['id_room'] ?></th>
<th><?php echo $room['name_room'] ?></th>
<th><?php echo $room['action'] ?></th>
<th><a href="?action=update_room&id_room=<?php echo $room['id_room'] ?>">update</a></th>
<th><a href="?action=delete_room&id_room=<?php echo $room['id_room'] ?>">delete</a></th>
</tr>

<?php endforeach?>
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
    <title>List movie</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>