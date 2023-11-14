<?php
function list_cinema(){
 $sql = "SELECT * FROM room"; 
 $result=pdo_query($sql);
 return $result;
}  
?>