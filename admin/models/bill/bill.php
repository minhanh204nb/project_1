<?php
function insert_bill($id_account, $vnp_TxnRef, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price)
{
    $sql = "INSERT INTO bill (id_account,vnp_TxnRef,price_tickets,price_combo,name_movie,cinema,room,seats,show_day,showtime,total_price) VALUES('$id_account','$vnp_TxnRef','$price_tickets','$price_combo','$name_movie','$cinema','$room','$seats','$show_day','$showtime','$total_price')";
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
function total_bill()
{
    $sql = "SELECT COUNT(id_bill) AS total_rows FROM bill";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_rows'];
}

function total_price_bill()
{
    $sql = "SELECT SUM(total_price) AS total_price FROM bill";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_price'];
}
