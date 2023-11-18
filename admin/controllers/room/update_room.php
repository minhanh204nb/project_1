
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
                                <li class="active"><a href="index.php?action=room">List room</a></li>
                            </ul>
                        </div>
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="page-title">Update Room</h3>
                                </div>
                            </div>
                        </div>
                        <form action="?action=update_room" method="post" class="card">
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>NAME ROOM<span class="text-danger">*</span></label>
                                                <input type="text" name="name_room" class="form-control" required placeholder="name room"></ </div>
                                                <label>Trang Thái<span class="text-danger">*</span></label>
                                                <input type="text" name="trangthai" class="form-control" required placeholder="name room"></ </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bank-details-btn ">
                                <input type="submit" name="btn" class="btn btn-primary me-2" value="UPDATE">
                                    <!-- <input type="submit" class="btn btn-primary me-2" name="insert_category" value="INSERT"> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>