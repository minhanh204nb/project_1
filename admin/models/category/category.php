<?php
function insert_category($name_category)
{
    $sql = "INSERT INTO CATEGORY (name_category) VALUES ('$name_category')";
    pdo_execute($sql);
}
function update_category($id_category, $name_category)
{
    $sql = "UPDATE category SET name_category = '".$name_category."' WHERE id_category = ".$id_category;
    pdo_execute($sql);
}
function delete_category($id_category)
{
    $sql = "DELETE FROM category WHERE id_category = ".$id_category;
   pdo_query($sql);
}
function loadall_category()
{
    // $sql = "select * from category order by id_category";
    // $sql = "select * from category order by id_category asc";
    $sql="SELECT * from category order by id_category";
    $list_category = pdo_query($sql);
    return $list_category;
}
function loadone_category($id_category)
{
    $sql = "SELECT * from category where id_category=" . $id_category;
    $list_category = pdo_query_one($sql);
    return $list_category;
}
