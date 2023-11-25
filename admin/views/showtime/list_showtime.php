<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href="index.php?action=insert_showtime" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add Showtime</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <tr style="text-align: center;">
                                            <th>ID</th>
                                            <th>ROOM</th>
                                            <th>NAME MOVIE</th>
                                            <th>IMAGES MOVIE</th>
                                            <th>SHOW DATE</th>
                                            <th>START TIME</th>
                                            <th>END TIME</th>
                                            <th>STATUS</th>
                                            <th colspan="2">ACTION</th>
                                        </tr>
                                        <?php
                                      

                                 

                                  

                                        foreach ($list_showtime as $showtime) {
                                            extract(($showtime));

                                            
                                            foreach($list_room as $room){
                                                extract($room);
                                               
                                                if($showtime['id_room']=== $room['id_room']){
                                                    $showtime['id_room'] = $room['name_room'];
                                                    break;
                                                }
                                            }
                                           
                                            foreach($list_action as $action){
                                                extract($action);
                                                if($showtime['id_action'] ===$action["id_action"]){
                                                    $showtime['id_action'] =$action["action_rap"];
                                                    break;
                                                }
                                            }

                                            foreach ($list_movie as $movie){
                                                extract($movie);
                                                $hinhpath = "../uploads/movie/" . $movie['image'];
                                                if (is_file($hinhpath)) {
                                                    $image = "<img src='" . $hinhpath . "' height='80px'>";
                                                } else {
                                                    $image = "no photo";
                                                }
                                                if($showtime['id_movie']=== $movie['id_movie']){
                                                    $showtime['id_movie'] = $movie['name_movie'];
                                                    break;
                                                }
                                            }

                                            

                                            

                                            $edit_showtime = "index.php?action=edit_showtime&id=" . $showtime['id_showtime'];
                                            $delete_showtime = "index.php?action=delete_showtime&id=" . $showtime['id_showtime'];
                                         
                                            echo "<tr>";
                                            echo "<td>" . $showtime["id_showtime"] . "</td>";
                                            echo "<td>" . $showtime['id_room'] . "</td>";
                                            echo "<td>" . $movie["name_movie"] . "</td>";
                                            echo "<td>" . $image . "</td>";
                                            echo "<td>" . $showtime["show_date"] . "</td>";
                                            echo "<td>" . $showtime["start_time"] . "</td>";
                                            echo "<td>" . $showtime["end_time"] . "</td>";
                                            echo "<td>" . $showtime["id_action"] . "</td>";
                                            echo "<td class='edit-delete-btn'>
                                            <a href='" . $edit_showtime . "' class='text-success'><i class='feather-edit-3 me-1'></i> Edit</a>
                                            <a href='" . $delete_showtime . "' onclick='return confirm(\"Bạn có chắc muốn xóa?\");' class='text-danger' data-bs-toggle='modal' data-bs-target='#deleteModal'><i class='feather-trash-2 me-1'></i> Delete</a></td>";
                                            echo "</tr>";
                                        }
                                        // 
                                        // var_dump($list_showtime);
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
    <title>List Showtime</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>