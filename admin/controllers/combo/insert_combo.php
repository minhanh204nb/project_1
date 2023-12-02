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
                                <li class="active"><a href="index.php?action=combo">DANH SÁCH COMBO</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">THÊM COMBO</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=insert_combo" method="post" class="card" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TÊN COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="name_combo" class="form-control" required placeholder="name combo"></ </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>IMAGES COMBO<span class="text-danger">*</span></label>
                                                <input type="file" name="img_combo" class="form-control" required placeholder="img combo"></ </div>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title">HÌNH ẢNH</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                                            <label>THÊM HÌNH ẢNH <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                            <label class="custom-file-container__custom-file">
                                                                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="img_combo">
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>GIÁ TIỀN<span class="text-danger">*</span></label>
                                                <input type="text" name="price_combo" class="form-control" required placeholder="price combo"></ </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>MÔ TẢ<span class="text-danger">*</span></label>
                                                <input type="text" name="mota" class="form-control" required placeholder="describe combo"></ </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                    <input type="submit" class="btn btn-primary me-2" name="insert_combo" value="THÊM">
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

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/fileupload/fileupload.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

</html>