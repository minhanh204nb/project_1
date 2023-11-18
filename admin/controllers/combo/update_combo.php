
<?php
if (is_array($list_combo)) {
    extract(($list_combo));
}
?>
<!<!DOCTYPE html>
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
                                    <h3 class="page-title">Update combo</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=update_combo" method="post" class="card" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>NAME COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="name_combo" class="form-control" required value="<?php if(isset($name_combo)&&($name_combo!="")) echo $name_combo?>"></ </div>
                                            </div>
                                            <div class="form-group">
                                                <label>IMAGE COMBO<span class="text-danger">*</span></label>
                                                <input type="file" name="img_combo" class="form-control" required value="<?php if(isset($img_combo)&&($img_combo!="")) echo $img_combo?>"></ </div>
                                            </div>
                                            <div class="form-group">
                                                <label>PRICE COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="price_combo" class="form-control" required value="<?php if(isset($price_combo)&&($price_combo!="")) echo $price_combo?>"></ </div>
                                            </div>
                                            <div class="form-group">
                                                <label>DESCRIBE COMBO<span class="text-danger">*</span></label>
                                                <input type="text" name="mota" class="form-control" required value="<?php if(isset($mota)&&($mota!="")) echo $mota?>"></ </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                <input type="hidden" name="id_combo" value="<?php if(isset($id_combo)&&($id_combo>0)) echo $id_combo;?>">
                                    <input type="submit" class="btn btn-primary me-2" name="update_combo" value="UPDATE">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>