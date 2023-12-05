<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">THÊM LIÊN HỆ</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">THỐNG KÊ</a>
                        </li>
                        <li class="breadcrumb-item"><a href="index.php?action=contact">DANH SÁCH LIÊN HÊ</a>
                        </li>
                        <li class="breadcrumb-item active">THÊM LIÊN HỆ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php?action=insert_contact" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Người liên hệ</label>
                                        <input name="name" class="form-control datetimepicker" value="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input name="title" type="text" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea name="content" cols="30px" rows="5px" class="form-control"></textarea>
                                    </div>
                                    <div class="text-end mt-4">
                                        <input class="btn btn-primary" name="insert_contact" type="submit" value="THÊM">
                                        <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>