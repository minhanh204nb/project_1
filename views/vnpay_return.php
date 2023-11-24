<!DOCTYPE html>
<html lang="en">
<?php include './admin/models/vnpay/vnpay.php';
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VNPAY RESPONSE</title>
    <!-- Bootstrap core CSS -->
    <link href="/views/assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/views/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="/views/assets/jquery-1.11.3.min.js"></script>
</head>

<body>
    <?php
    require_once("config.php");
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $inputData = array();
    foreach ($_GET as $key => $value) {
        if (substr($key, 0, 4) == "vnp_") {
            $inputData[$key] = $value;
        }
    }

    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $i = 0;
    $hashData = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
    }

    $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
    ?>
    <!--Begin display -->
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY RESPONSE</h3>
        </div>
        <div class="table-responsive">
            <div class="form-group">
                <label>Mã đơn hàng:</label>
                <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                <label><?php echo $user ?></label>
            </div>
            <div class="form-group">
                <label>Số tiền:</label>
                <label><?php echo $_GET['vnp_Amount'] ?></label>
            </div>
            <div class="form-group">
                <label>Nội dung thanh toán:</label>
                <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã phản hồi (vnp_ResponseCode):</label>
                <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã GD Tại VNPAY:</label>
                <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã Ngân hàng:</label>
                <label><?php echo $_GET['vnp_BankCode'] ?></label>
            </div>
            <div class="form-group">
                <label>Thời gian thanh toán:</label>
                <label><?php echo $_GET['vnp_PayDate'] ?></label>
            </div>
            <div class="form-group">
                <label>Kết quả:</label>
                <label>
                    <?php
                    if ($secureHash == $vnp_SecureHash) {
                        if ($_GET['vnp_ResponseCode'] == '00') {
                            echo "<span style='color:blue'>GD Thanh cong</span>";
                        } else {
                            echo "<span style='color:red'>GD Khong thanh cong</span>";
                        }
                    } else {
                        echo "<span style='color:red'>Chu ky khong hop le</span>";
                    }
                    ?>
                </label>
            </div>
        </div>
        <p>&nbsp;</p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y') ?></p>
        </footer>
    </div>
    
    <form action="../index?action=insert_vnpay" method="post">
        <input type="text"  name="vnp_Amount" value="<?php echo $_GET['vnp_Amount'] ?>">
        <input type="text"  name="vnp_BankCode" value="<?php echo $_GET['vnp_BankCode'] ?>">
        <input type="text"  name="vnp_BankTranNo" value="<?php echo $_GET['vnp_BankTranNo'] ?>">
        <input type="text"  name="vnp_CardType" value="<?php echo $_GET['vnp_CardType'] ?>">
        <input type="text"  name="vnp_OrderInfo" value="<?php echo $_GET['vnp_OrderInfo'] ?>">
        <input type="text"  name="vnp_PayDate" value="<?php echo $_GET['vnp_PayDate'] ?>">
        <input type="text"  name="vnp_ResponseCode" value="<?php echo $_GET['vnp_ResponseCode'] ?>">
        <input type="text"  name="vnp_TmnCode" value="<?php echo $_GET['vnp_TmnCode'] ?>">
        <input type="text"  name="vnp_TransactionNo" value="<?php echo $_GET['vnp_TransactionNo'] ?>">
        <input type="text"  name="vnp_TransactionStatus" value="<?php echo $_GET['vnp_TransactionStatus'] ?>">
        <input type="text"  name="vnp_TxnRef" value="<?php echo $_GET['vnp_TxnRef'] ?>">
        <input type="text"  name="vnp_SecureHash" value="<?php echo $_GET['vnp_SecureHash'] ?>">
        <input type="submit" name="insert_vnpay" value="HOME">
    </form>
</body>

<style>
    body {
        background-color: #f8f9fa;
        padding-top: 50px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 5px;
    }

    .header {
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 20px;
    }

    .header h3 {
        margin-top: 0;
        color: #007bff;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .footer {
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px solid #dee2e6;
        text-align: center;
        color: #6c757d;
    }

    /* Add more styling as needed */
</style>

</html>