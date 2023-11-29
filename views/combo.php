<section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">CÁC GÓI COMBO</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php?action=home">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">COMBO</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- pricing-area -->
<section class="pricing-area pricing-bg" data-background="assets/img/bg/pricing_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title title-style-three text-center mb-70">
                    <span class="sub-title">vô vàn ưu đãi với</span>
                    <h2 class="title">NHỮNG GÓI COMBO HẤP DẪN</h2>
                </div>
            </div>
        </div>
        <div class="pricing-box-wrap">
            <div class="row justify-content-center">
                <?php
                foreach ($list_combo as $combo) {
                    echo '<div class="col-lg-4 col-md-6 col-sm-8">
            <div class="pricing-box-item mb-30">
                <div class="pricing-top">
                    <img src="../uploads/combo/' . $combo['img_combo'] . '" alt="">
                </div>
                <div class="pricing-list">
                    <ul>
                        <li class="quality"><i class="fas fa-check"></i>' . $combo['name_combo'] . '<span>Best</span></li>
                        <li><i class="fas fa-check"></i>' . $combo['price_combo'] . '</li>
                        <li><i class="fas fa-check"></i>' . $combo['mota'] . '</li>
                    </ul>
                </div>
            </div>
        </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<style>
    .pricing-top img {
        width: 100%;
        height: 35%;
    }
</style>