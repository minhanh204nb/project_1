<?php
if (is_array($list_contact)) {
    extract(($list_contact));
}
?>
<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">CẬP NHẬT LIÊN HỆ</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">THỐNG KÊ</a>
                        </li>
                        <li class="breadcrumb-item"><a href="index.php?action=contact">DANH SÁCH LIÊN HÊ</a>
                        </li>
                        <li class="breadcrumb-item active">CẬP NHẬT LIÊN HỆ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php?action=update_contact" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Người liên hệ</label>
                                        <input name="name" class="form-control datetimepicker" value="<?php echo $list_contact['name']; ?>" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="text" class="form-control" value="<?php echo $list_contact['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input name="title" type="text" class="form-control" value="<?php echo $list_contact['title']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea name="content" cols="30px" rows="5px" class="form-control"><?php echo $list_contact['content']; ?></textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Thời gian</label>
                                        <input type="text" class="form-control" value="">
                                    </div> -->
                                    <div class="text-end mt-4">
                                        <input type="hidden" name="id_contact" value="<?php if (isset($id_contact) && ($id_contact > 0)) echo $id_contact; ?>">
                                        <input class="btn btn-primary" name="update_contact" type="submit" value="Cập nhật">
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