<?php
function insert_room($name_room,$action_room)
{
    $sql = "INSERT INTO room (name_room,action_room) VALUES ('$name_room','$action_room')";
    pdo_execute($sql);
}
function update_room($id_room, $name_room,$action_room)
{
    $sql = "UPDATE room SET name_room = '".$name_room."', action_room = '".$action_room."' WHERE id_room = ".$id_room;
    pdo_execute($sql);
}
function delete_room($id_room)
{
    $sql = "DELETE FROM room WHERE id_room = ".$id_room;
   pdo_query($sql);
}
function loadall_room()
{
    
    $sql = "select * from room order by id_room asc";
    $list_room = pdo_query($sql);
    return $list_room;
}
function loadone_room($id_room)
{
    $sql = "SELECT * from room where id_room=" . $id_room;
    $list_room = pdo_query_one($sql);
    return $list_room;
}
