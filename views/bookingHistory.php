<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table {
            padding: 1000px;
            margin: 120px auto;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            color: black;
        }

        .ttrr {
            height: 150px;
        }

        .title-info h3 {
            margin-top: 50px;
            color: black;
            text-align: center;
            margin-bottom: 20px;
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
            <th>Action</th>
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
            echo '<td>' . $bill['vnp_TxnRef'] . '</td>';
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>