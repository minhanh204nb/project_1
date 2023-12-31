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
    <?php
    if (is_array($list_showtime)) {
        extract(($list_showtime));
    }

    if (is_array($list_room)) {
        extract(($list_room));
    }

    if (is_array($list_movie)) {
        extract(($list_movie));
    }

    if (is_array($list_action)) {
        extract(($list_action));
    }


    ?>

    <body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
        <div class="main-wrapper">
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="col-md-9">
                                <ul class="list-links mb-4">
                                    <li class="active"><a href="index.php?action=showtime">List Showitme</a></li>
                                </ul>
                            </div>
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Update Showtime</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="index.php?action=update_showtime" method="post" class="card" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>ROOM</label>
                                                    <select class="select" name="id_room">
                                                        <?php
                                                       
                                                        foreach ($list_showtime as $showtime) {
                                                            foreach ($list_room as $room) {
                                                                if ($room['id_room'] === $showtime['id_room']) {
                                                                    echo ' <option value="' . $room['id_room'] . '">' . $room['name_room'] . '</option>';
                                                                }
                                                            }
                                                        }
                                                        ?>



                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>MOVIE</label>
                                                    <select class="select" name="id_movie">
                                                        <?php
                                                        
                                                        foreach ($list_showtime as $showtime) {
                                                            foreach ($list_movie as $movie) {
                                                                if ($movie['id_movie'] === $showtime['id_movie']) {
                                                                    echo ' <option value="' . $movie['id_movie'] . '">' . $movie['name_movie'] . '</option>';
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Show Date</label>
                                                    <input type="date" id="date" name='show_date' class="form-control" value="<?php if (isset($show_date) && ($show_date != "")) echo $show_date ?>">

                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Start Time<span class="text-danger">*</span></label>
                                                        <input type="time" class="form-control" name="start_time" value="<?php if (isset($start_time) && ($start_time != "")) echo $end_time ?>">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>End Time<span class="text-danger">*</span></label>
                                                        <input type="time" class="form-control" name="end_time" value="<?php if (isset($end_time) && ($end_time != "")) echo $end_time ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>Trạng thái</label>
                                                    <select class="select" name="id_action">
                                                        <?php
                                                        
                                                        foreach ($list_showtime as $showtime) {
                                                            foreach ($list_action as $action) {
                                                                // echo ' <option value="' . $action['id_action'] . '">' . $action['action_rap'] . '</option>';
                                                                if ($action['id_action'] === $showtime['id_action']) {
                                                                    echo ' <option value="' . $action['id_action'] . '">' . $action['action_rap'] . '</option>';
                                                                }
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
                                            <input type="text" name="id_showtime" value="<?php echo $id_showtime ?>" hidden>
                                            <input type="submit" name="update_showtime" class="btn btn-primary me-2" value="UPDATE SHOWTIME">
                                        </div>
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