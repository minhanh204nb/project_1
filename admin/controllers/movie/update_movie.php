<!DOCTYPE html>
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
if (is_array($list_movie)) {
    extract(($list_movie));
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
                                <li class="active"><a href="index.php?action=movie">DANH SÁCH PHIM</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">CẬP NHẬT PHIM</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=update_movie" enctype="multipart/form-data" class="card" method="post">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TÊN PHIM<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($name_movie) && ($name_movie != "")) echo $name_movie ?>" name="name_movie" required placeholder="name movie">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>NỘI DUNG<span class="text-danger">*</span></label>
                                                <textarea required class="col-lg-12 col-md-12" name="content" id="" cols="30" rows="7"><?php if (isset($content) && ($content != "")) echo $content ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group modal-select-box">
                                                <label>QUỐC GIA</label>
                                                <select class="select" name="id_country">
                                                    <option value="<?php if (isset($id_country) && ($id_country != "")) echo $id_country ?>">Giữ Nguyên</option>
                                                    <?php
                                                    foreach ($list_country as $country) {
                                                        echo ' <option value="' . $country['id_country'] . '">' . $country['name_country'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>NĂM SẢN XUẤT<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($year) && ($year != "")) echo $year ?>" name="year" required min="1900" max="2023">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TỔNG THỜI GIAN<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($time) && ($time != "")) echo $time ?>" name="time" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>ĐÁNH GIÁ<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($reviews) && ($reviews != "")) echo $reviews ?>" name="reviews" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TÁC GIẢ<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($author) && ($author != "")) echo $author ?>" name="author" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>DIỄN VIÊN<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($performer) && ($performer != "")) echo $performer ?>" name="performer" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>GIỚI HẠN TUỔI<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($age_limit) && ($age_limit != "")) echo $age_limit ?>" name="age_limit" required min="0" max="150">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>ẢNH</label>
                                                <div class="change-photo-btn">
                                                    <div class="pop_up">
                                                        <img src="../uploads/movie/<?php echo $image ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="change-photo-btn">
                                                    <div class="pop_up">
                                                        <p>CẬP NHẬT ẢNH</p>
                                                    </div>
                                                    <input type="file" name="image" class="upload">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Trailer PHIM<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php if (isset($trailer_movie) && ($trailer_movie != "")) echo $trailer_movie ?>" name="trailer_movie" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group modal-select-box">
                                                <label>THỂ LOẠI</label>
                                                <select class="select" name="id_category">
                                                    <option value="<?php if (isset($id_category) && ($id_category != "")) echo $id_category ?>">Giữ Nguyên</option>
                                                    <?php
                                                    foreach ($list_category as $category) {
                                                        echo ' <option value="' . $category['id_category'] . '">' . $category['name_category'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TRẠNG THÁI<span class="text-danger">*</span></label>
                                                <input type="text" value="<?php if (isset($action) && ($action != "")) echo $action ?>" class="form-control" name="action" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" blog-categories-btn pt-0">
                                <div class="bank-details-btn ">
                                    <!-- <button name="insert" class="btn btn-primary me-2">Add Movie</button> -->
                                    <input type="text" name="id_movie" value="<?php echo $id_movie ?>" hidden>
                                    <input type="submit" name="update_movie" class="btn btn-primary me-2" value="CẬP NHẬT PHIM">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .pop_up {
            max-width: 100%;
            max-height: 100%;
            overflow: hidden;
            text-align: center;
            position: relative;
        }

        .pop_up img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
    </style>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/ckeditor.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            // Add image change event listener
            $('.upload').on('change', function() {
                // Get the selected file
                var file = this.files[0];
                if (file) {
                    // Create a FileReader to read the file
                    var reader = new FileReader();
                    // Set the image source when the FileReader has finished reading the file
                    reader.onload = function(e) {
                        $('.pop_up p').html('<img src="' + e.target.result + '" alt="Selected Image">');
                    };
                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>