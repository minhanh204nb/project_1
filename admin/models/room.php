<?php

function listroom(){
 $sql = "SELECT * FROM room"; 
 $result=pdo_query($sql);
 return $result;
} 
function insert_room($name_room,$action){
    $sql="INSERT INTO room(name_room,action)
    values('$name_room','$action')";
    pdo_execute($sql);

} 
function delete_room($id_room)
{
    $sql = "DELETE FROM room WHERE id_room = $id_room";
    pdo_execute($sql);
}
?>