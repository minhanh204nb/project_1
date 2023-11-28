<!DOCTYPE html>
<html lang="en">
<?php include './admin/models/vnpay/vnpay.php';
session_start();
$booking_info = isset($_SESSION['booking_info']) ? $_SESSION['booking_info'] : [];
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
                <label>Số tiền :</label>
                <label><?php echo $_GET['vnp_Amount'] ?></label>
            </div>
            <div class="form-group">
                <label>Nội dung thanh toán :</label>
                <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
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
                <?php
                $payDate = $_GET['vnp_PayDate'];
                $dateTime = new DateTime($payDate);
                $formattedDate = $dateTime->format('H:i:s - d/m/Y');
                ?>
                <label><?php echo $formattedDate; ?></label>
            </div>
            <div class="form-group">
                <label>Kết quả:</label>
                <label>
                    <?php
                    if ($secureHash == $vnp_SecureHash) {
                        if ($_GET['vnp_ResponseCode'] == '00') {
                            echo "<span style='color:blue'>Giao dịch thành công</span>";
                        } else {
                            echo "<span style='color:red'>Giao dịch không thành công</span>";
                        }
                    } else {
                        echo "<span style='color:red'>Chữ ký không hợp lệ</span>";
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
    <?php
    $url_return = "";
    if ($_GET['vnp_ResponseCode'] == '00') {
        $url_return = "../index.php?action=insert_vnpay";
    } else {
        $url_return = "../index.php";
    }
    ?>

    <form action="<?php echo $url_return ?>" method="post" class="center-btn">
        <input type="text" hidden name="vnp_Amount" value="<?php echo $_GET['vnp_Amount'] ?>">
        <input type="text" hidden name="vnp_BankCode" value="<?php echo $_GET['vnp_BankCode'] ?>">
        <input type="text" hidden name="vnp_BankTranNo" value="<?php echo $_GET['vnp_BankTranNo'] ?>">
        <input type="text" hidden name="vnp_CardType" value="<?php echo $_GET['vnp_CardType'] ?>">
        <input type="text" hidden name="vnp_OrderInfo" value="<?php echo $_GET['vnp_OrderInfo'] ?>">
        <input type="text" hidden name="vnp_PayDate" value="<?php echo $_GET['vnp_PayDate'] ?>">
        <input type="text" hidden name="vnp_ResponseCode" value="<?php echo $_GET['vnp_ResponseCode'] ?>">
        <input type="text" hidden name="vnp_TmnCode" value="<?php echo $_GET['vnp_TmnCode'] ?>">
        <input type="text" hidden name="vnp_TransactionNo" value="<?php echo $_GET['vnp_TransactionNo'] ?>">
        <input type="text" hidden name="vnp_TransactionStatus" value="<?php echo $_GET['vnp_TransactionStatus'] ?>">
        <input type="text" hidden name="vnp_TxnRef" value="<?php echo $_GET['vnp_TxnRef'] ?>">
        <input type="text" hidden name="vnp_SecureHash" value="<?php echo $_GET['vnp_SecureHash'] ?>">
        <?php
        if ($_GET['vnp_ResponseCode'] === '00') {
            echo '<input type="text" hidden name="id_account" value="' . $booking_info['id_account'] . '">';
            echo '<input type="text" hidden name="vnp_TxnRef" value="' . $_GET['vnp_TxnRef'] . '">';
            echo '<input type="text" hidden name="tickets" value="' . $booking_info['tickets'] . '">';
            echo '<input type="text" hidden name="combos" value="' . $booking_info['combos'] . '">';
            echo '<input type="text" hidden name="name_movie" value="' . $booking_info['name_movie'] . '">';
            echo '<input type="text" hidden name="cinema" value="' . $booking_info['cinema'] . '">';
            echo '<input type="text" hidden name="room" value="' . $booking_info['room'] . '">';
            echo '<input type="text" hidden name="seats" value="' . $booking_info['seats'] . '">';
            echo '<input type="text" hidden name="month" value="' . $booking_info['month'] . '">';
            echo '<input type="text" hidden name="hours" value="' . $booking_info['hours'] . '">';
            echo '<input type="text" hidden name="amount" value="' . $booking_info['amount'] . '">';
        } ?>
        <input type="submit" name="insert_vnpay" value="HOME" class="btn">
    </form>
</body>

<style>
    .btn {
        background-color: #007bff;
        color: #f8f9fa;
        font-weight: bold;
        font-size: 20px;
        width: 150px;
        height: 50px;
    }

    .center-btn :hover {
        color: white;
        border: 2px solid yellow;
    }

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

    /* Center the Home button */
    .center-btn {
        margin-top: 30px;
        text-align: center;
    }
</style>


</html>