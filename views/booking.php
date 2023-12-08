<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'config.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="../assets/css/style_booking.css"> -->
    <title>Movie Ticket Booking Website</title>
</head>
<?php
$id_movie = isset($_GET['id']) ? $_GET['id'] : 0;
$movie = loadone_movie($id_movie);
$loadone_showtime = loadone_showtime_by_id_movie($id_movie);
$list_combo = loadall_combo();
?>

<body style="background-color: black;">
    <div class="book">
        <div class="left">
            <img src="../uploads/movie/<?php echo $movie['image'] ?>" alt="" id="poster">
            <div class="play">
                <i class="bi bi-play-fill" id="play"></i>
            </div>
            <form action="/views/vnpay_create_payment.php" id="frmCreateOrder" class="cont" method="post">
                <h2><?php echo $movie['name_movie'] ?></h2>
                <hr>
                <h5>Suất chiếu</h5>
                <input type="text" name="hours" value="" readonly>
                <input type="text" name="month" value="" readonly>
                <h5>Rạp</h5>
                <input type="text" name="cinema" value="CGV" readonly>
                <input type="text" hidden name="id_movie" value="<?php echo $movie['id_movie'] ?>" readonly>
                <h5>Phòng</h5>
                <input type="text" name="room" value="" readonly>
                <h5>Vị trí ghế</h5>
                <input type="text" name="seats" value="" readonly>
                <h5>Giá vé</h5>
                <input type="text" name="tickets" id="tickets" value="0" readonly>
                <h5>Giá combo</h5>
                <input type="text" name="combos" value="0" readonly>
                <hr>
                <h3>Tổng tiền</h3>
                <div class="form-group">
                    <input class="form-control" data-val="true" data-val-number="The field amount must be a number." data-val-required="The amount field is required." id="amount" max="100000000" min="10000" name="amount" type="number" value="0" readonly style="color:white;background-color: transparent;border: none; " />
                </div>
                <h4>Chọn phương thức thanh toán</h4>
                <div class="form-group">
                    <input type="radio" id="bankCode1" name="bankCode" value="">
                    <label for="bankCode1">Cổng thanh toán VNPAYQR</label><br>
                    <h5 hidden>Cách 2: Tách phương thức tại site của đơn vị kết nối</h5>
                    <input hidden type="radio" id="bankCode2" name="bankCode" value="VNPAYQR">
                    <label hidden for="bankCode2">Thanh toán bằng ứng dụng hỗ trợ VNPAYQR</label><br>
                    <input type="radio" checked="true" id="bankCode3" name="bankCode" value="VNBANK">
                    <label for="bankCode3">Thanh toán qua thẻ ATM/Tài khoản nội địa</label><br>
                    <input hidden type="radio" id="bankCode4" name="bankCode" value="INTCARD">
                    <label hidden for="bankCode4">Thanh toán qua thẻ quốc tế</label><br>
                </div>
                <hr>
                <input type="hidden" name="id_account" value="<?php echo $id_account ?>">
                <input type="hidden" name="name_movie" value="<?php echo $movie['name_movie'] ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="name_clinet" value="<?php echo $name_clinet ?>">
                <input type="submit" name="redirect" class="btn btn-default" value="Thanh toán">
            </form>
            <style>
                input {
                    background-color: #2E3037;
                    outline: none;
                    border: none;
                    color: white;
                }
            </style>
        </div>
        <div class="right">
            <video src="../assets/video/Gadar2 Official Trailer - 11th August - Sunny Deol - Ameesha Patel - Anil Sharma - Zee Studios.mp4" id="video"></video>
            <div class="head_time">
                <h1 id="title"><?php echo $movie['name_movie'] ?></h1>
                <div class="time">
                    <h6><i class="bi bi-clock"></i><?php echo $movie['time'] ?> phút</h6>
                    <select class="btn min" name="id_room" id="id_room">
                        <option value="">Chọn Phòng</option>
                        <?php
                        $list_room = loadall_room();
                        $displayedRoomNames = array();
                        // mảng để lưu trữ tên phòng đã hiển thị
                        foreach ($loadone_showtime as $room) {
                            $name = "";
                            foreach ($list_room as $room_item) {
                                if ($room_item['id_room'] == $room['id_room']) {
                                    $name = $room_item['name_room'];
                                    break;
                                }
                            }
                            // chỉ hiển thị tùy chọn nếu tên phòng chưa được hiển thị trước đó
                            if (!in_array($name, $displayedRoomNames)) {
                                echo '<option value="' . $room['id_room'] . '">' . $name . '</option>';
                                $displayedRoomNames[] = $name; // Add the room name to the displayed list
                            }
                        }
                        ?>
                    </select>

                </div>
            </div>
            <div class="date_type">
                <?php
                // Set the starting date as the current date
                $currentDate = new DateTime();
                // Create an array to store the day abbreviations
                $dayAbbreviations = ['T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'];
                // Output the left card and date points
                echo '<div class="left_card">';
                echo '<div class="card_month crd">';
                // Loop to generate the next 14 date points (for two weeks)
                for ($i = 0; $i < 10; $i++) {
                    // Output the day abbreviation and day of the month
                    echo '<li>';
                    echo '<h6 class="date_point not_pick">' . $dayAbbreviations[$currentDate->format('N') - 1] . '</h6>';
                    echo '<h6 class="date_point">' . $currentDate->format('d/m') . '</h6>';
                    echo '</li>';
                    // Move to the next day
                    $currentDate->add(new DateInterval('P1D'));
                }
                echo '</div>';
                echo '</div>';
                ?>
                <div class="right_card">
                    <h6 class="title">Chọn suất chiếu</h6>
                    <div class="card_month crd required-div" id="showTimes" required>
                        <?php
                        // $showTimes = load_showtime_by_id_room($room['id_room']);
                        // $showTimes = loadone_showtime_by_id_movie($_GET['id']);
                        foreach ($showTimes as $time) {
                            echo '<li>';
                            echo '<h6></h6>';
                            echo '<h6>' . $time['start_time'] . '</h6>';
                            echo '</li>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="screen" id="screen">
                Màn hình
            </div>
            <div class="chair" id="chair">
                <?php
                $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
                $columns = range(1, 40);
                foreach ($rows as $row) {
                    echo '<div class="row">';
                    foreach ($columns as $column) {
                        $seat = $row . $column;
                        // echo' <input class="seat" data-seat="' . $seat . '" type="text" value="'.$seat.'" > ';
                        echo '<li class="seat red' . $seat . '" " data-seat="' . $seat . ',">' . $seat . '  </li>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <style>
                <?php
                foreach ($list_seat as $seat) {
                    $seatString = $seat['custom_seat'];
                    $seats = explode(',', $seatString);
                    $seatClasses = array_map(function ($seat) {
                        return ".red" . strtolower($seat);
                    }, $seats);
                    $resultString = implode(',', $seatClasses);
                    echo $resultString;
                    echo '.red' . $resultString . '{
                        pointer-events: none;
                        background-color: red !important;
                    }';
                }
                ?>
            </style>
            <div class="details" id="det">
                <div class="details_chair">
                    <li>Có thể đặt</li>
                    <li>Đã có người đặt</li>
                    <li>Bạn chọn</li>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table border="1" class="datatable table table-stripped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <tr style="text-align: center;">
                                        <th>TÊN COMBO</th>
                                        <th>ẢNH MINH HỌA</th>
                                        <th>GIÁ COMBO</th>
                                        <th colspan="1">MÔ TẢ</th>
                                        <th colspan="1">CHỌN COMBO</th>
                                    </tr>
                                    <?php
                                    foreach ($list_combo as $combo) {
                                        extract(($combo));
                                        $hinhpath = "./uploads/combo/" . $combo['img_combo'];
                                        if (is_file($hinhpath)) {
                                            $img_combo = "<img src='" . $hinhpath . "' height='80px'>";
                                        } else {
                                            $img_combo = "no photo";
                                        }
                                        echo "<tr>";
                                        echo "<td>" . $combo["name_combo"] . "</td>";
                                        echo "<td>" . $img_combo . "</td>";
                                        echo "<td>" . $combo["price_combo"] . "</td>";
                                        echo "<td>" . $combo["mota"] . "</td>";
                                        echo "<td class='edit-delete-btn'>";
                                        echo ' <button>-</button>';
                                        echo '<input type="text" name="quantity" value="0" min="0" max="1000">';
                                        echo ' <button>+</button>';
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    // 
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../assets/js/app1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.5/JsBarcode.all.js" integrity="sha512-wkHtSbhQMx77jh9oKL0AlLBd15fOMoJUowEpAzmSG5q5Pg9oF+XoMLCitFmi7AOhIVhR6T6BsaHJr6ChuXaM/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        JsBarcode("#barcode", "J18800792023");
    </script>
    <script>
        $(document).ready(function() {
            $(".seat").click(function() {
                var selectedSeat = $(this).data("seat");
                var currentSeatsValue = $("input[name='seats']").val();
                var newSeatsValue;
                if (currentSeatsValue === "") {
                    newSeatsValue = selectedSeat;
                } else {
                    newSeatsValue = currentSeatsValue.includes(selectedSeat) ?
                        currentSeatsValue.replace(',' + selectedSeat, '').replace(selectedSeat + ',', '').replace(selectedSeat, '') :
                        currentSeatsValue + '' + selectedSeat;
                }
                $("input[name='seats']").val(newSeatsValue);
                // Toggle the selection class for styling
                $(this).toggleClass("selected");
                // Calculate and update the amount price
                updateamountPrice();
            });

            function updateamountPrice() {
                var selectedSeats = $("input[name='seats']").val();
                var pricePerSeat = 79000; // Set your price per seat here
                var amount = selectedSeats.split(',').length * pricePerSeat;
                // Update the tickets input field with the calculated amount price
                $("input[name='tickets']").val(amount.toLocaleString('vi-VN') + ' VND');
                // You can also update other fields if needed (e.g., combos, amount money, etc.)
                // $("input[name='combos']").val(amount.toLocaleString('vi-VN') + ' đ');
                $("input[name='amount']").val(amount);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add click event listener to date points
            $(".date_point").click(function() {
                // Remove the 'selected' class from all date points
                $(".date_point").removeClass("selected");
                var selectedDate = $(this).text().trim();
                // Update the month input field
                $("input[name='month']").val(selectedDate);
                // Add the 'selected' class to the clicked date point
                $(this).addClass("selected");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add change event listener to id_room select
            $("#id_room").change(function() {
                // Get the selected room name
                var selectedRoomName = $("#id_room option:selected").text();
                // Set the value of the "ROOM" input field to the selected room name
                $("input[name='room']").val(selectedRoomName);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var comboData = <?php echo json_encode($list_combo); ?>;
            var selectedCombos = Array(comboData.length).fill(0);
            document.querySelectorAll(".edit-delete-btn button:last-child").forEach(function(button, index) {
                button.addEventListener("click", function() {
                    updateQuantity(index, 1);
                });
            });
            document.querySelectorAll(".edit-delete-btn button:first-child").forEach(function(button, index) {
                button.addEventListener("click", function() {
                    updateQuantity(index, -1);
                });
            });

            function updateQuantity(index, value) {
                var inputElement = document.querySelectorAll(".edit-delete-btn input")[index];
                var quantity = parseInt(inputElement.value) + value;
                // Kiểm tra nếu số lượng là lớn hơn hoặc bằng 0 thì mới cập nhật giá trị
                if (quantity >= 0) {
                    inputElement.value = quantity;
                    selectedCombos[index] = quantity;
                    updateComboPrice();
                }
            }

            function updateComboPrice() {
                var combosPrice = 0;
                for (var i = 0; i < comboData.length; i++) {
                    combosPrice += selectedCombos[i] * parseFloat(comboData[i].price_combo);
                }
                $("input[name='combos']").val(combosPrice.toLocaleString('vi-VN') + ' VND');
                updateamountPrice();
            }

            function updateamountPrice() {
                var ticketsPrice = parseFloat($("input[name='tickets']").val().replace(/[^\d.]/g, '')) || 0;
                var combosPrice = parseFloat($("input[name='combos']").val().replace(/[^\d.]/g, '')) || 0;
                var amount = ticketsPrice + combosPrice;
                $("input[name='amount']").val(amount.toLocaleString('vi-VN') + '000');
            }
        });
        updateamountPrice();
    </script>
    <!-- Add this JavaScript block at the end of your HTML -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Load all showtimes initially
            var allShowtimes = <?php echo json_encode($loadone_showtime); ?>;
            // Get the showtimes container
            var showtimesContainer = document.getElementById("showTimes");
            // Get the hours input field
            var hoursInput = document.querySelector("input[name='hours']");
            // Add change event listener to id_room select
            document.getElementById("id_room").addEventListener("change", function() {
                // Get the selected room ID
                var selectedRoomId = this.value;
                // Filter showtimes based on the selected room
                var filteredShowtimes = allShowtimes.filter(function(showtime) {
                    return showtime.id_room == selectedRoomId;
                });
                // Update the showtimes container
                updateShowtimes(filteredShowtimes);
            });
            // Function to update showtimes in the DOM
            function updateShowtimes(showtimes) {
                // Clear existing showtimes
                showtimesContainer.innerHTML = "";
                // Add new showtimes to the container
                showtimes.forEach(function(time) {
                    var listItem = document.createElement("li");
                    listItem.innerHTML = '<h6>' + time.start_time + '</h6>';
                    // Add click event listener to the showtime item
                    listItem.addEventListener("click", function() {
                        // Update the hours input field with the selected showtime
                        hoursInput.value = time.start_time;
                        // Remove the 'selected' class from all showtime items
                        var allShowtimeItems = showtimesContainer.querySelectorAll("li");
                        allShowtimeItems.forEach(function(item) {
                            item.classList.remove("selected");
                        });
                        // Add the 'selected' class to the clicked showtime item
                        listItem.classList.add("selected");
                    });
                    showtimesContainer.appendChild(listItem);
                });
            }
            // Initial update based on the default selected room
            var defaultRoomId = document.getElementById("id_room").value;
            var defaultShowtimes = allShowtimes.filter(function(showtime) {
                return showtime.id_room == defaultRoomId;
            });
            updateShowtimes(defaultShowtimes);
        });
    </script>
</body>
<style>
    .not_pick {
        pointer-events: none;
    }

    /* CSS */
    .my-element {
        background-color: blue;
        /* Màu mặc định */
        transition: background-color 0.3s ease;
        /* Hiệu ứng chuyển đổi */
    }

    .my-element:hover {
        background-color: green;
        /* Màu khi hover */
    }

    .date_point {
        margin-left: 10px;
        margin-right: 30px;
    }

    .required-div:empty::before {
        content: "Vui lòng chọn phòng và xuất chiếu mong muốn . . .";
        color: red;
    }
</style>




</html>