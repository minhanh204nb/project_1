<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Danh sách đặt vé và hóa đơn</font>
                        </font>
                    </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">bảng điều khiển</font>
                                </font>
                            </a></li>
                        <li class="breadcrumb-item active">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hóa đơn</font>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




        <div class="card invoices-tabs-card">
            <div class="card-body card-body pt-0 pb-0">
                <div class="invoices-main-tabs border-0 pb-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="invoices-settings-btn invoices-settings-btn-one">
                                <a href="add-invoice.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Hóa đơn mới
                                        </font>
                                    </font>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon1.svg" alt="">
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"><?php echo total_price_bill(); ?> VND</font>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <p class="inovices-all">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Tất cả hóa đơn </font>
                            </font>
                            <span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><?php echo total_bill(); ?></font>
                                </font>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon2.svg" alt="">
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"><?php echo total_price_bill(); ?> VND</font>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <p class="inovices-all">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hóa đơn đã thanh toán </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><?php echo total_bill(); ?></font>
                                </font>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon3.svg" alt="">
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">$2,05,545</font>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <p class="inovices-all">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hóa đơn chưa thanh toán </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">70</font>
                                </font>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon4.svg" alt="">
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">$8,8,797</font>
                                    </font>
                                </div>
                            </div>
                        </div>
                        <p class="inovices-all">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hóa đơn bị hủy </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">80</font>
                                </font>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($list_bill as $bill) {
                extract($bill);
                echo '<div class="col-sm-6 col-lg-4 col-xl-3 d-flex">';
                echo '<div class="card invoices-grid-card w-100">';
                echo '<div class="card-header d-flex justify-content-between align-items-center">';
                echo '<a href="index.php?action=details_bill&id=' . $bill['id_bill'] . '" class="invoice-grid-link">';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">' . $bill['vnp_TxnRef'] . '</font>';
                echo '</font>';
                echo '</a>';
                echo '<div class="dropdown dropdown-action">';
                echo '<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>';
                echo '<div class="dropdown-menu dropdown-menu-end">';
                echo '<a class="dropdown-item" href="index.php?action=edit_bill&id=' . $bill['id_bill'] . '"><i class="far fa-edit me-2"></i>';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">Sửa</font>';
                echo '</font>';
                echo '</a>';
                echo '<a class="dropdown-item" href="view-invoice.html"><i class="far fa-eye me-2"></i>';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">Xem</font>';
                echo '</font>';
                echo '</a>';
                echo '<a class="dropdown-item" href="index.php?action=delete_bill&id=' . $bill['id_bill'] . '"><i class="far fa-trash-alt me-2"></i>';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">Xóa bỏ</font>';
                echo '</font>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="card-middle">';
                echo '<h2 class="card-middle-avatar">';
                echo '<a href="index.php?action=edit_account&id=' . $bill['id_account'] . '"><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/avatar.jpg" alt="Hình ảnh người dùng">';
                echo '<font style="vertical-align: inherit;">';
                foreach ($list_account as $account) {
                    if ($account['id_account'] == $bill['id_account']) {
                        $bill['id_account'] = $account['name_clinet'];
                    }
                }
                echo '<font style="vertical-align: inherit;">' .  $bill['id_account'] . '</font>';
                echo '</font>';
                echo '</a>';
                echo '</h2>';
                echo '</div>';
                echo '<div class="card-body">';
                echo '<div class="row align-items-center">';
                echo '<div class="col">';
                echo '<span><i class="far fa-money-bill-alt"></i>';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">Số tiền</font>';
                echo '</font>';
                echo '</span>';
                echo '<h6 class="mb-0">';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">' . $bill['total_price'] . '</font>';
                echo '</font>';
                echo '</h6>';
                echo '</div>';
                echo '<div class="col-auto">';
                echo '<span><i class="far fa-calendar-alt"></i>';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">Ngày thanh toán</font>';
                echo '</font>';
                echo '</span>';
                echo '<h6 class="mb-0">';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">' . $bill['booking_date'] . '</font>';
                echo '</font>';
                echo '</h6>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="card-footer">';
                echo '<div class="row align-items-center">';
                echo '<div class="col-auto">';
                echo '<span class="badge bg-success-dark">';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">' . $bill['action'] . '</font>';
                echo '</font>';
                echo '</span>';
                echo '</div>';
                echo '<div class="col-auto">';
                echo '<span class="badge bg-success-dark">';
                echo '<font style="vertical-align: inherit;">';
                echo '<font style="vertical-align: inherit;">' . $bill['note'] . '</font>';
                echo '</font>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <!-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div> -->
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item <?php echo $previous_class; ?>">
                                <a class="page-link" href="?action=bill&page=<?php echo $previous_page; ?>">Previous</a>
                            </li>

                            <?php foreach ($page_range as $page) : ?>
                                <li class="paginate_button page-item <?php echo ($page == $current_page) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?action=bill&page=<?php echo $page; ?>"><?php echo $page; ?></a>
                                </li>
                            <?php endforeach; ?>
                            <li class="paginate_button page-item <?php echo $next_class; ?>">
                                <a class="page-link" href="?action=bill&page=<?php echo $next_page; ?>">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Ẩn menu dropdown ban đầu */
    .dropdown-menu {
        display: none;
    }

    /* Hiển thị menu dropdown khi class "dropdown" được nhấp vào */
    .dropdown.show .dropdown-menu {
        display: block;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Bắt sự kiện khi class "dropdown" được nhấp vào
        $('.dropdown').click(function() {
            // Đảm bảo chỉ có một menu dropdown được hiển thị tại một thời điểm
            $('.dropdown').not(this).removeClass('show');
            // Toggle class "show" cho menu dropdown được nhấp vào
            $(this).toggleClass('show');
        });

        // Bắt sự kiện khi click bên ngoài menu dropdown để ẩn nó
        $(document).click(function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown').removeClass('show');
            }
        });
    });
</script>