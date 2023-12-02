<?php
if (is_array($list_category)) {
    extract(($list_category));
}
?>
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
                                <li class="active"><a href="index.php?action=category">DANH SÁCH THỂ LOẠI</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">CẬP NHẬT THỂ LOAI</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=update_category" method="post" class="card">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TÊN THỂ LOẠI<span class="text-danger">*</span></label>
                                                <input type="text" name="name_category" class="form-control" required value="<?php if(isset($name_category)&&($name_category!="")) echo $name_category?>"></ </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                    <input type="hidden" name="id_category" value="<?php if(isset($id_category)&&($id_category>0)) echo $id_category;?>">
                                    <input type="submit" class="btn btn-primary me-2" name="update_category" value="CẬP NHẬT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>