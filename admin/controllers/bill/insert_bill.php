<div class="page-wrapper" style="min-height: 1000px;">
    <div class="content container-fluid">

        <div class="page-header invoices-page-header">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb invoices-breadcrumb">
                        <li class="breadcrumb-item invoices-breadcrumb-item">
                            <a href="index.php?action=bill">
                                <i class="fe fe-chevron-left"></i> Danh sách hóa đơn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card invoices-add-card">
                    <div class="card-body">
                        <form action="index.php?action=insert_bill" class="invoices-form" method="post">
                            <div class="invoices-main-form">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Tên người dùng</label>
                                            <input type="text" name="id_account" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6 col-sm-12 col-12">
                                        <h4 class="invoice-details-title">Chi tiết hóa đơn</h4>
                                        <div class="invoice-details-box">
                                            <div class="invoice-inner-head">
                                                <span>Mã hóa đơn <a href="view-invoice.html"><input type="text" name="vnp_TxnRef" value="<?php echo rand(1000000, 9999999999) ?>" style="border: none; color:blue;"></a></span>
                                            </div>
                                            <div class="invoice-inner-footer">
                                                <div class="row align-items-center">
                                                    <div class="invoice-inner-date">
                                                        <span>
                                                            Thời gian <input class="form-control datetimepicker" type="text" placeholder="15/02/2022" value="<?php echo date('d/m/y') ?>">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-add-table">
                                <h4>Chi tiết hóa đơn</h4>
                                <div class="table-responsive">
                                    <table class="table table-center add-table-items">
                                        <thead>
                                            <tr>
                                                <th>Tên Phim</th>
                                                <th>Rạp</th>
                                                <th>Phòng chiếu</th>
                                                <th>Ghế</th>
                                                <th>Ngày chiếu</th>
                                                <th>Giờ chiếu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="add-row">
                                                <td>
                                                    <input name="name_movie" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input name="cinema" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input name="room" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input name="seats" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input name="month" type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input name="hours" type="text" class="form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="invoice-faq">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="faq-tab">
                                                <div class="panel panel-default">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-terms">
                                                            <h6>Ghi chú :</h6>
                                                            <textarea class="mb-0" name="note" id="" cols="50" rows="5"></textarea>
                                                            <!-- <p class="mb-0">Enter customer notes or any other details</p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="invoice-total-card">
                                        <h4 class="invoice-total-title">Tổng tiền</h4>
                                        <div class="invoice-total-box">
                                            <div class="invoice-total-inner">
                                                <p>Giá vé <span> <input class="form-control" name="tickets" type="text" value=""></span></p>
                                                <br>
                                                <p>Giá combo <span> <input class="form-control" name="combos" type="text" value=""></span></p>
                                            </div>
                                            <div class="invoice-total-footer">
                                                <h4>Tổng tiền thanh toán <span> <input name="amount" class="form-control" type="text" value=""></span></h4><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="upload-sign">
                                <div class="form-group float-end mb-0">
                                    <input class="btn btn-primary" type="submit" name="insert_bill" value="THÊM">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>