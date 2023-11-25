<?php
function loadall_showtime()
{
    $sql = "SELECT * FROM showtime ORDER BY id_showtime";
    $list_showtime = pdo_query($sql);
    return $list_showtime;
}
function loadone_showtime_by_id_movie($id_movie)
{
    $sql = "SELECT * FROM showtime where id_movie = '$id_movie'";
    $loadone_showtime = pdo_query($sql);
    return $loadone_showtime;
}

function load_showtime_by_id_room($id_room)
{
    $sql = "SELECT start_time FROM showtime WHERE id_room = '$id_room'";
    $load_showtime_by_id_room = pdo_query($sql);
    return $load_showtime_by_id_room;
}
