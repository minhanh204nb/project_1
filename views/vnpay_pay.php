<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="./assets/jquery-1.11.3.min.js"></script>
</head>

<body>
    <?php include ("./config.php"); ?>
    <div class="container">
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="/views/vnpay_create_payment.php" id="frmCreateOrder" method="post">
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." id="amount" max="100000000" min="1" name="amount" type="number" value="10000" />
                </div>
                <h4>Chọn phương thức thanh toán</h4>
                <div class="form-group">
                    
                    <input type="radio" checked="true" id="bankCode1" name="bankCode" value="">
                    <label for="bankCode1">Cổng thanh toán VNPAYQR</label><br>

                    <h5>Cách 2: Tách phương thức tại site của đơn vị kết nối</h5>
                    <input type="radio" id="bankCode2" name="bankCode" value="VNPAYQR">
                    <label for="bankCode2">Thanh toán bằng ứng dụng hỗ trợ VNPAYQR</label><br>

                    <input type="radio" id="bankCode3" name="bankCode" value="VNBANK">
                    <label for="bankCode3">Thanh toán qua thẻ ATM/Tài khoản nội địa</label><br>

                    <input type="radio" id="bankCode4" name="bankCode" value="INTCARD">
                    <label for="bankCode4">Thanh toán qua thẻ quốc tế</label><br>
                </div>
                <div class="form-group">
                    <h5>Chọn ngôn ngữ giao diện thanh toán:</h5>
                    <input type="radio" checked="true" id="language1" name="language" value="vn">
                    <label for="language1">Tiếng việt</label><br>
                    <input type="radio" id="language2" name="language" value="en">
                    <label for="language2">Tiếng anh</label><br>
                </div>
                <button type="submit" class="btn btn-default">Thanh toán</button>
            </form>
        </div>

    </div>
</body>

</html>
