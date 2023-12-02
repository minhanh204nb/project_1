<?php
function loadall_seat()
{
    $sql = "SELECT * FROM seat ORDER BY id_seat";
    $list_seat = pdo_query($sql);
    return $list_seat;
}

function load_seat_by_id_showtime($id_showtime)
{
    $sql = "SELECT * FROM seat WHERE id_showtime='$id_showtime'";
    $list_seat = pdo_query($sql);
    return $list_seat;
}
function load_seat_by_id_movie($id_movie)
{
    $sql = "SELECT * FROM seat WHERE id_movie='$id_movie'";
    $list_seat = pdo_query($sql);
    return $list_seat;
}
function insert_seat($id_movie, $id_showtime, $custom_seat)
{
    $sql = "INSERT INTO seat (id_showtime,id_movie,custom_seat) VALUES ('$id_showtime','$id_movie','$custom_seat');";
    pdo_execute($sql);
}
