<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="../assets/css/style_booking.css"> -->
    <title>Movie Ticket Booking Website</title>
</head>

<body style="background-color: black;">
    <div class="book">
        <div class="left">
            <img src="https://source.unsplash.com/random" alt="" id="poster">
            <div class="play">
                <i class="bi bi-play-fill" id="play"></i>
            </div>
            <div class="cont">
                <h2>Name MOVIE</h2>
                <hr>
                <h5>SHOWTIME</h5>
                <input type="text" name="hours" value="" readonly>
                <input type="text" name="month" value="" readonly>
                <h5>ROOM</h5>
                <input type="text" value="P210" readonly>
                <h5>Seats</h5>
                <input type="text" name="seats" value="" readonly>
                <h5>Tickets</h5>
                <input type="text" value="000.00 đ" readonly>
                <h5>Combos</h5>
                <input type="text" value="000.00 đ" readonly>
                <hr>
                <h3>Total Money</h3>
                <input type="text" value="000.00 đ" readonly>
                <li>--------------</li>
                <br>
                <input class="btn" type="submit" value="Thanh Toán">
            </div>
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
                <h1 id="title">NAME MOVIE</h1>
                <div class="time">
                    <h6><i class="bi bi-clock"></i> 165 minutes</h6>
                    <button>ROOM</button>
                </div>
            </div>
            <div class="date_type">
                <?php
                // Set the starting date as the current date
                $currentDate = new DateTime();
                // Create an array to store the day abbreviations
                $dayAbbreviations = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                // Output the left card and date points
                echo '<div class="left_card">';
                echo '<div class="card_month crd">';
                // Loop to generate the next 14 date points (for two weeks)
                for ($i = 0; $i < 14; $i++) {
                    // Output the day abbreviation and day of the month
                    echo '<li>';
                    echo '<h6>' . $dayAbbreviations[$currentDate->format('N') - 1] . '</h6>';
                    echo '<h6 class="date_point">' . $currentDate->format('j') . '</h6>';
                    echo '</li>';
                    // Move to the next day
                    $currentDate->add(new DateInterval('P1D'));
                }
                echo '</div>';
                echo '</div>';
                ?>
                <div class="right_card">
                    <h6 class="title">Show Time</h6>
                    <div class="card_month crd" id="showTimes">
                        <?php
                        $showTimes = ["10:00", "12:30", "14:00", "17:00", "18:00", "20:00", "21:00", "22:30", "12:00", "12:30"];

                        foreach ($showTimes as $time) {
                            echo '<li>';
                            echo '<h6></h6>';
                            echo '<h6>' . $time . '</h6>';
                            echo '</li>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="screen" id="screen">
                Screen
            </div>
            <!-- chairs  -->
            <div class="chair" id="chair">
                <?php
                $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
                $columns = range(1, 9);

                foreach ($rows as $row) {
                    echo '<div class="row">';
                    foreach ($columns as $column) {
                        $seat = $row . $column;
                        echo '<li class="seat" data-seat="' . $seat . '">' . $seat . '</li>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <!-- Ticket  -->
            <div class="ticket" id="ticket">
                <div class="tic">
                    <div class="barcode">
                        <div class="card">
                            <h6>ROW J</h6>
                            <h6>7 September 2023</h6>
                        </div>
                        <div class="card">
                            <h6>Seat 18</h6>
                            <h6>23:00</h6>
                        </div>

                        <svg id="barcode"></svg>
                        <h5>VEGUS CINEMA</h5>
                    </div>
                    <div class="tic_details">
                        <div class="type">4DX</div>
                        <h5 class="pvr"><span>Vegus</span> Cinema</h5>
                        <h1>Jawan</h1>
                        <div class="seat_det">
                            <div class="seat_cr">
                                <h6>ROW</h6>
                                <h6>J</h6>
                            </div>
                            <div class="seat_cr">
                                <h6>SEAT</h6>
                                <h6>18</h6>
                            </div>
                            <div class="seat_cr">
                                <h6>DATE</h6>
                                <h6>7 <sub>sep</sub></h6>
                            </div>
                            <div class="seat_cr">
                                <h6>TIME</h6>
                                <h6>11:30 <sub>pm</sub></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Details  -->
            <div class="details" id="det">
                <div class="details_chair">
                    <li>Avalable</li>
                    <li>Booked</li>
                    <li>Selected</li>
                </div>
            </div>
            <button class="book_tic" id="book_ticket">
                <i class="bi bi-arrow-left-short"></i>
            </button>
            <button class="book_tic" id="back_ticket">
                <i class="bi bi-arrow-left-short"></i>
            </button>
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
                        currentSeatsValue + ',' + selectedSeat;
                }

                $("input[name='seats']").val(newSeatsValue);

                // Toggle the selection class for styling
                $(this).toggleClass("selected");
            });
        });
    </script>
    <style>
        .seat.selected {
            background-color: yellow;
            /* Change this to your desired color */
            color: black;
            /* Change this to your desired text color */
        }
    </style>
    <script>
        $(document).ready(function() {
            // Define an array of show times
            var showTimes = [
                "10:00", "12:30", "14:00", "17:00", "18:00", "20:00", "21:00", "22:30", "12:00", "12:30"
            ];

            // Add click event listener to show time buttons
            $("#showTimes li").click(function() {
                // Remove the 'selected' class from all show time buttons
                $("#showTimes li").removeClass("selected");

                var selectedTime = $(this).text().trim();

                // Update the hours input field
                $("input[name='hours']").val(selectedTime);

                // Add the 'selected' class to the clicked button
                $(this).addClass("selected");
            });
        });
    </script>
    <style>
        /* Add this style to highlight the selected show time button */
        #showTimes li.selected {
            background-color: #FF0000;
        }
    </style>
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





</body>

</html>