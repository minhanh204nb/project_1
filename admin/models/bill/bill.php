<?php
function insert_bill($id_account, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price)
{
    $sql = "INSERT INTO bill (id_account,price_tickets,price_combo,name_movie,cinema,room,seats,show_day,showtime,total_price) VALUES('$id_account','$price_tickets','$price_combo','$name_movie','$cinema','$room','$seats','$show_day','$showtime','$total_price')";
    pdo_execute($sql);
}

function loadall_bill()
{
    $sql = "SELECT * FROM bill order by id_bill";
    $list_bill = pdo_query($sql);
    return $list_bill;
}
function loadbill_by_id_account($id_account)
{
    $sql = "SELECT * FROM bill WHERE id_account='$id_account'";
    $list_bill_by_id_account = pdo_query($sql);
    return $list_bill_by_id_account;
}
