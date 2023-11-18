<!DOCTYPE html>
<html lang="en">
<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li class="active"><a href="index.php?action=combo">List Combo</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Add combo</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=insert_combo" method="post" class="card" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>NAME COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="name_combo" class="form-control" required placeholder="name combo"></ </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>IMAGES COMBO<span class="text-danger">*</span></label>
                                                <input type="file" name="img_combo" class="form-control" required placeholder="img combo"></ </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>PRICE COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="price_combo" class="form-control" required placeholder="price combo"></ </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>DESCRIBE COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="mota" class="form-control" required placeholder="describe combo"></ </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                    <input type="submit" class="btn btn-primary me-2" name="insert_combo" value="INSERT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>