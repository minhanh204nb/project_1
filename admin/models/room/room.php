<?php
function listroom(){
 $sql = "SELECT * FROM room order by id_room"; 
 $result=pdo_query($sql);
 return $result;
} 
function insert_room($name_room,$action){
    $sql="INSERT INTO room(name_room,action)
    values('$name_room','$action')";
    pdo_execute($sql);
} 
function get_id_room($id){
    $sql="SELECT * FROM room where id_room=$id";
    return pdo_query_one($sql);
}
function update_room( $id_room,$name_room, $action)
{
    $sql="UPDATE room set name_room='$name_room',action='$action' WHERE id_room= $id_room ";
    pdo_execute($sql);
}
function delete_room($id_room){
    $sql = "DELETE FROM room WHERE id_room = $id_room";
    pdo_execute($sql);
}
?>