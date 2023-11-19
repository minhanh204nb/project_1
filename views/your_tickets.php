<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #fff;
        }

        .container.infomation {
            max-width: 1200px;
            margin: 70px auto;
            background-color: #2c2c2c;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title h3 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            /* color: #ff5733; */
        }

        hr {
            border: 1px solid #4d4d4d;
            margin: 20px 0;
        }

        .list-group {
            margin: 0;
            padding: 0;
        }

        .list-group-item {
            background-color: whitesmoke;
            border: none;
            border-radius: 0;
            color: black;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #4d4d4d;
            color: white;
        }

        .list-group-item.active {
            font-weight: bold;
            background-color: #007bff;
            color: red;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
        }

        .author {
            margin-top: 20px;
            text-align: center;
        }

        .avatar img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .info {
            margin-top: 20px;
        }

        .info h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .info h5 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .info p {
            font-size: 18px;
            margin-bottom: 5px;
        }
    </style>
</head>
<?php
extract($_SESSION['user']);
?>


<body>
    <div class="container infomation">
        <div class="title">
            <h3>Thông Tin Tài Khoản</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action info">THÔNG TIN CHUNG</a>
                    <a href="views/account/edit_info.php" class="list-group-item list-group-item-action history popup-video">CHI TIẾT TÀI KHOẢN</a>
                    <a href="views/account/voucher.php" class="list-group-item list-group-item-action changeInfo popup-video">VOUCHER</a>
                    <a href="views/account/bookingHistory.php" class="list-group-item list-group-item-action changePass popup-video">LỊCH SỬ GIAO DỊCH</a>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-12">
                <div class="title">
                    <h3>THÔNG TIN CHUNG</h3>
                </div>
                <div class="author">
                    <div class="avatar">
                        <img class="avatar" src="https://source.unsplash.com/random" alt="">
                    </div>
                    <h4><strong>Xin chào <?php echo $name_clinet ?></strong></h4>
                    <span>Với trang này, bạn sẽ quản lý được tất cả thông tin tài khoản của mình.</span>
                </div>
                <div class="info">
                    <h4><strong>Thông tin liên hệ</strong></h4>
                    <h6>Liên hệ</h6>
                    <p>Name: <?php echo $name_clinet ?> </p>
                    <p>Email: <?php echo $email ?> </p>
                    <p>Tel: <?php echo $phone_number ?> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>