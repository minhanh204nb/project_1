<?php
function insert_bill($id_account, $vnp_TxnRef, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price)
{
    $sql = "INSERT INTO bill (id_account,vnp_TxnRef,price_tickets,price_combo,name_movie,cinema,room,seats,show_day,showtime,total_price) VALUES('$id_account','$vnp_TxnRef','$price_tickets','$price_combo','$name_movie','$cinema','$room','$seats','$show_day','$showtime','$total_price')";
    pdo_execute($sql);
}

function update_bill($id_bill, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price, $note)
{
    $sql = "UPDATE bill SET price_tickets = '$price_tickets', price_combo = '$price_combo', name_movie='$name_movie',cinema='$cinema',room='$room',seats='$seats',show_day='$show_day',showtime='$showtime',total_price='$total_price',note='$note' WHERE id_bill = '$id_bill'";
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
function loadbill_by_id_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id_bill='$id_bill'";
    $list_bill = pdo_query($sql);
    return $list_bill;
}

function delete_bill($id_bill)
{
    $sql = "DELETE FROM bill WHERE id_bill='$id_bill'";
    pdo_query($sql);
}

function loadone_bill($id_bill)
{
    $sql = "SELECT * FROM bill WHERE id_bill='$id_bill'";
    $list_bill = pdo_query_one($sql);
    return $list_bill;
}
