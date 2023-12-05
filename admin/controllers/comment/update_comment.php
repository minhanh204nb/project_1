<?php
if (is_array($list_comment)) {
    extract(($list_comment));
}
?>
<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">SỬA BÌNH LUẬN</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">THỐNG KÊ</a>
                        </li>
                        <li class="breadcrumb-item"><a href="index.php?action=comment">DANH SÁCH BÌNH LUẬN</a>
                        </li>
                        <li class="breadcrumb-item active">SỬA BÌNH LUẬN</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="index.php?action=update_comment" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên người dùng</label>
                                        <input name="name_user" class="form-control datetimepicker" value="<?php echo $list_comment['name_user']; ?>" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Id Phim</label>
                                        <input name="id_movie" type="text" class="form-control" value="<?php echo $list_comment['id_movie']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea name="content" cols="30px" rows="5px" class="form-control"><?php echo $list_comment['content']; ?></textarea>
                                    </div>
                                    <div class="text-end mt-4">
                                        <input type="hidden" name="id_comment" value="<?php if (isset($id_comment) && ($id_comment > 0)) echo $id_comment; ?>">
                                        <input class="btn btn-primary" name="update_comment" type="submit" value="Cập nhật">
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