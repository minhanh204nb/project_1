<?php
function insert_showtime($id_room,$id_movie ,$show_date,$start_time,$end_time,$id_action)
{
    $sql = "INSERT INTO showtime (id_room,id_movie,show_date,start_time,end_time,id_action) VALUES ('$id_room','$id_movie','$show_date','$start_time','$end_time','$id_action')";
    pdo_execute($sql);
}
function update_showtime($id_showtime,$id_room,$id_movie ,$show_date,$start_time,$end_time,$id_action)
{
    $sql = "UPDATE showtime SET id_room = '".$id_room."',id_movie = '".$id_movie."',show_date = '".$show_date."',start_time = '".$start_time."',end_time = '".$end_time."',id_action = '".$id_action."' WHERE id_showtime = ".$id_showtime;
    pdo_execute1($sql);
}
function delete_showtime($id_showtime)
{
    $sql = "DELETE FROM showtime WHERE id_showtime = ".$_GET['id'];
   pdo_query($sql);
}
function loadall_showtime()
{
    $sql = "select * from showtime order by id_showtime asc";
    $list_showtime = pdo_query($sql);
    return $list_showtime;
}
function loadone_showtime($id_showtime)
{
    $sql = "SELECT * from showtime where id_showtime=" . $id_showtime;
    $list_showtime = pdo_query_one($sql);
    return $list_showtime;
}

function loadall_action()
{
    $sql = "select * from action order by id_action asc";
    $list_action = pdo_query($sql);
    return $list_action;
}
