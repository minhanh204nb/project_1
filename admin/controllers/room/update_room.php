<?php
if (is_array($list_room)) {
    extract(($list_room));
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
                                <li class="active"><a href="index.php?action=room">DANH SÁCH PHÒNG</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">CẬP NHẬT PHÒNG</h3>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?action=update_room" method="post" class="card">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>TÊN PHÒNG<span class="text-danger">*</span></label>
                                                <input type="text" name="name_room" class="form-control" required value="<?php if (isset($name_room) && ($name_room != "")) echo $name_room ?>"></ </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group row">
                                                <label>TRẠNG THÁI PHÒNG<span class="text-danger">*</span></label>

                                                <div class="col-md-10">
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="action_room" value="0" checked> Hoạt Động
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="action_room" value="1"> Không hoạt động
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                    <input type="hidden" name="id_room" value="<?php if (isset($id_room) && ($id_room > 0)) echo $id_room; ?>">
                                    <input type="submit" class="btn btn-primary me-2" name="update_room" value="CẬP NHẬT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>