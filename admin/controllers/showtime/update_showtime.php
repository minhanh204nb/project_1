 <?php
    if (is_array($list_showtime)) {
        extract(($list_showtime));
    }
    ?>
   
<!<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Kanakku - Bootstrap Admin HTML Template</title>

        <link rel="shortcut icon" href="assets/img/favicon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/feather.css">

        <link rel="stylesheet" href="assets/css/ckeditor.css">

        <link rel="stylesheet" href="assets/css/select2.min.css">

        <link rel="stylesheet" href="assets/css/style.css">
    </head>
   
    <body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
        <div class="main-wrapper">
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="col-md-9">
                                <ul class="list-links mb-4">
                                    <li class="active"><a href="index.php?action=showtime">Danh sách suất chiếu </a></li>
                                </ul>
                            </div>
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Sửa suất chiếu</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="index.php?action=update_showtime" method="post" class="card" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>Phòng</label>
                                                    <select class="select" name="id_room">
                                                        <?php
                                                        foreach ($list_room as $room) {
                                                            if ($id_room == $id_showtime) {
                                                                echo ' <option value="' . $room['id_room'] . '"selected>' . $room['name_room'] . '</option>';
                                                            } else {
                                                                echo ' <option value="' . $room['id_room'] . '">' . $room['name_room'] . '</option>';
                                                            }
                                                        }
                                                        ?>



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>Phim</label>
                                                    <select class="select" name="id_movie">
                                                        <?php
                                                        foreach ($list_movie as $movie) {
                                                            if ($id_movie == $id_showtime) {
                                                                echo ' <option value="' . $movie['id_movie'] . '"selected>' . $movie['name_movie'] . '</option>';
                                                            } else {
                                                                echo ' <option value="' . $movie['id_movie'] . '">' . $movie['name_movie'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Ngày chiếu</label>
                                                    <input type="date" id="date" name='show_date' class="form-control" value="<?php if (isset($show_date) && ($show_date != "")) echo $show_date ?>">

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Thời gian chiếu<span class="text-danger">*</span></label>
                                                        <input type="time" class="form-control" name="start_time" value="<?php if (isset($start_time) && ($start_time != "")) echo $end_time ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>Trạng thái</label>
                                                    <select class="select" name="id_action">
                                                        <?php
                                                        foreach ($list_action as $action) {
                                                            if ($id_action == $id_showtime) {
                                                                echo ' <option value="' . $action['id_action'] . '"selected >' . $action['action'] . '</option>';
                                                            } else {
                                                                echo ' <option value="' . $action['id_action'] . '">' . $action['action'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" blog-categories-btn pt-0">
                                        <div class="bank-details-btn ">
                                            <!-- <button name="insert" class="btn btn-primary me-2">Add Movie</button> -->
                                            
                                        <input type="hidden" name="id_showtime" value="<?php if (isset($id_showtime) && ($id_showtime > 0)) echo $id_showtime; ?>">
<<<<<<< HEAD

                                            <input type="submit" name="update_showtime" class="btn btn-primary me-2" value="UPDATE SHOWTIME">
                                        </div>
=======
                                        <input type="submit" class="btn btn-primary me-2" name="update_showtime" value="CẬP NHẬT">
>>>>>>> 976e95c400325171dbeb041b5ec4d230c2d8d8af
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/js/jquery-3.6.0.min.js"></script>

            <script src="assets/js/bootstrap.bundle.min.js"></script>

            <script src="assets/js/feather.min.js"></script>

            <script src="assets/js/ckeditor.js"></script>

            <script src="assets/js/select2.min.js"></script>

            <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

            <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

            <script src="assets/js/script.js"></script>
           
    </body>

    </html>