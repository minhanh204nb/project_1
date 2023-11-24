<?php
function insert_bill($id_account, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price)
{
    $sql = "INSERT INTO bill (id_account,price_tickets,price_combo,name_movie,cinema,room,seats,show_day,showtime,total_price) VALUES('$id_account','$price_tickets','$price_combo','$name_movie','$cinema','$room','$seats','$show_day','$showtime','$total_price')";
    pdo_execute($sql);
}
