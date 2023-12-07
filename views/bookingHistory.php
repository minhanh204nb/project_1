<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        table {
            margin: 50px auto;
            width: 90%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            color: black;
            font-size: 15px;
        }

        th {
            background-color: #f2f2f2;
        }

        .ttrr {
            background-color: #f9f9f9;
        }

        .title-info {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .title-info h3 {
            margin: 0;
        }

        .title-info a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .title-info a:hover {
            text-decoration: underline;
        }

        body {
            background-image: url('../assets/img/bg/movie_details_bg.jpg');
        }
    </style>
</head>

<body>
    <div class="title-info">
        <h3>Lịch sử đặt vé</h3>
    </div>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên Phim</th>
            <th>Rạp</th>
            <th>Phòng chiếu</th>
            <th>Ghế</th>
            <th>Ngày chiếu</th>
            <th>Giờ chiếu</th>
            <th>Giá vé</th>
            <th>Giá combo</th>
            <th>Tổng tiền</th>
            <th>Thời Gian Đặt</th>
            <th>Thanh toán</th>
            <th>Ghi chú</th>
            <th>Mã thanh toán</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($list_bill as $bill) {
            echo "<tr class='ttrr'>";
            echo '<td>' . $stt++ . '</td>';
            echo '<td>' . $bill['name_movie'] . '</td>';
            echo '<td>' . $bill['cinema'] . '</td>';
            echo '<td>' . $bill['room'] . '</td>';
            echo '<td>' . $bill['seats'] . '</td>';
            echo '<td>' . $bill['show_day'] . '</td>';
            echo '<td>' . $bill['showtime'] . '</td>';
            echo '<td>' . $bill['price_tickets'] . '</td>';
            echo '<td>' . $bill['price_combo'] . '</td>';
            $total_amount = number_format($bill['total_price'], 0, ',', '.') . ' VND';
            echo '<td>' . $total_amount . '</td>';
            echo '<td>' . $bill['booking_date'] . '</td>';
            echo '<td>đã thanh toán</td>';
            echo '<td>' . $bill['note'] . '</td>';
            echo '<td>' . $bill['vnp_TxnRef'] . '</td>';
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>