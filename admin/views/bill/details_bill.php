<?php
foreach ($list_bill as $bill) {
}
?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card invoice-info-card">
                    <div class="card-body">
                        <div class="invoice-item invoice-item-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="assets/img/avatar.jpg" alt="logo">
                                    </div>
                                    <div class="invoice-head">
                                        <h2>HÓA ĐƠN</h2>
                                        <p>MÃ HÓA ĐƠN : <?php echo $bill['vnp_TxnRef'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <strong class="customer-text-one">LOẠI HÓA ĐƠN</strong>
                                        <h6 class="invoice-name">VÉ XEM PHIM</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-item invoice-item-two">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <strong class="customer-text-one">HÓA ĐƠN CỦA</strong>
                                        <?php
                                        foreach ($list_account as $account) {
                                            if ($bill['id_account'] == $account['id_account']) {
                                                $bill['id_account'] = $account['name_clinet'];
                                                $phone_number = $account['phone_number'];
                                                $email = $account['email'];
                                                $address = $account['address'];
                                            }
                                        }
                                        ?>
                                        <h6 class="invoice-name"> <?php echo $bill['id_account']; ?></h6>
                                        <p class="invoice-details invoice-details-two">
                                            Số điện thoại : <?php echo $phone_number ?><br>
                                            Email : <?php echo $email ?><br>
                                            Địa chỉ : <?php echo $address ?>
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="invoice-info invoice-info2">
                                        <strong class="customer-text-one">CHI TIẾT THANH TOÁN</strong>
                                        <p class="invoice-details">
                                            THẺ ATM<br>
                                            SỐ THẺ : 9704198526191432198<br>
                                            NCB BANK
                                        </p>
                                        <!-- <div class="invoice-item-box">
                                            <p>Recurring : 15 Months</p>
                                            <p class="mb-0">PO Number : 54515454</p>
                                        </div> -->
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
                                        <p>Ngày thanh toán : <?php echo $bill['booking_date'] ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <p>Số tiền thanh toán : <?php echo $bill['total_price'] ?> vnd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-item invoice-table-wrap">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="invoice-table table table-center mb-0">
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
                                                <?php
                                                foreach ($list_bill as $bill) {
                                                    echo "<tr>";
                                                    echo '<td>' . $bill['name_movie'] . '</td>';
                                                    echo '<td>' . $bill['cinema'] . '</td>';
                                                    echo '<td>' . $bill['room'] . '</td>';
                                                    echo '<td>' . $bill['seats'] . '</td>';
                                                    echo '<td>' . $bill['show_day'] . '</td>';
                                                    echo '<td>' . $bill['showtime'] . '</td>';
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="invoice-terms">
                                    <h6>Notes:</h6>
                                    <p class="mb-0">Enter customer notes or any other details</p>
                                </div>
                                <div class="invoice-terms">
                                    <h6>Terms and Conditions:</h6>
                                    <p class="mb-0">Enter customer notes or any other details</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="invoice-total-card">
                                    <div class="invoice-total-box">
                                        <div class="invoice-total-inner">
                                            <p>Giá vé <span><?php echo $bill['price_tickets'] ?> vnd</span></p>
                                            <p>Giá combo <span><?php echo $bill['price_combo'] ?> vnd</span></p>
                                        </div>
                                        <div class="invoice-total-footer">
                                            <h4>Tổng tiền thanh toán <span><?php echo $bill['total_price'] ?> vnd</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-sign text-end">
                            <img class="img-fluid d-inline-block" src="assets/img/signature.png" alt="sign">
                            <span class="d-block">MinhAnh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>