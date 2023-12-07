<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card invoice-info-card">
                    <form class="card-body" action="index.php?action=update_bill" method="post">
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th hidden>id</th>
                                                    <th>Tên Phim</th>
                                                    <th>Rạp</th>
                                                    <th>Phòng chiếu</th>
                                                    <th>Ghế</th>
                                                    <th>Ngày chiếu</th>
                                                    <th>Giờ chiếu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($list_bill as $bill) {
                                                    echo "<tr>";
                                                    // echo '<td>' . $bill['name_movie'] . '</td>';
                                                    echo '<td hidden> <input class="form-control" name="id_bill" type="text" value="' . $bill['id_bill'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="name_movie" type="text" value="' . $bill['name_movie'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="cinema" type="text" value="' . $bill['cinema'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="room" type="text" value="' . $bill['room'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="seats" type="text" value="' . $bill['seats'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="show_day" type="text" value="' . $bill['show_day'] . '" > </td>';
                                                    echo '<td> <input class="form-control" name="showtime" type="text" value="' . $bill['showtime'] . '" > </td>';
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-issues-box">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <!-- <p>Issue Date : 27 Jul 2022</p> -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <p>Ngày thanh toán : <input class="form-control" type="text" value="<?php echo $bill['booking_date'] ?>"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <!-- <div class="invoice-issues-date">
                                        <p>Số tiền thanh toán : <input class="form-control" type="text" value="<?php echo $bill['total_price'] ?>"></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="invoice-terms">
                                    <h6>Notes:</h6>
                                    <textarea name="note" class="mb-0" name="note" id="" cols="50" rows="5"> <?php echo $bill['note'] ?></textarea>
                                    <!-- <p class="mb-0">Enter customer notes or any other details</p> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="invoice-total-card">
                                    <div class="invoice-total-box">
                                        <div class="invoice-total-inner">
                                            <p>Giá vé <span> <input class="form-control" name="price_tickets" type="text" value="<?php echo $bill['price_tickets'] ?>"></span></p>
                                            <p>Giá combo <span> <input class="form-control" name="price_combo" type="text" value="<?php echo $bill['price_combo'] ?>"></span></p>
                                        </div>
                                        <div class="invoice-total-footer">
                                            <h4>Tổng tiền thanh toán <span> <input class="form-control" name="total_price" type="text" value="<?php echo $bill['total_price'] ?>"></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-sign text-end">
                            <img class="img-fluid d-inline-block" src="assets/img/signature.png" alt="sign">
                            <span class="d-block">MinhAnh</span>
                        </div>
                        <input class="btn btn-primary btn-blog mb-3" name="update_bill" type="submit" value="CẬP NHẬT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

</style>