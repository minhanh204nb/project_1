<?php
function insert_combo($name_combo, $img_combo, $price_combo, $mota)
{
    $sql = "INSERT INTO combo (name_combo,img_combo,price_combo,mota) VALUES ('$name_combo','$img_combo','$price_combo','$mota')";
    pdo_execute($sql);
}
function update_combo($id_combo, $name_combo, $img_combo, $price_combo, $mota)
{
    if ($img_combo != "") {
        $sql = "UPDATE combo SET name_combo = '" . $name_combo . "',img_combo = '" . $img_combo . "',price_combo = '" . $price_combo . "',mota = '" . $mota . "' WHERE id_combo = " . $id_combo;
    } else {
        $sql = "UPDATE combo SET name_combo = '" . $name_combo . "',price_combo = '" . $price_combo . "',mota = '" . $mota . "' WHERE id_combo = " . $id_combo;
    }
    pdo_execute($sql);
}
function delete_combo($id_combo)
{
    $sql = "DELETE FROM combo WHERE id_combo = " . $_GET['id'];
    pdo_query($sql);
}
function loadall_combo()
{
    // $sql = "select * from combo order by id_combo";
    $sql = "select * from combo order by id_combo desc";
    $list_combo = pdo_query($sql);
    return $list_combo;
}
function loadone_combo($id_combo)
{
    $sql = "SELECT * from combo where id_combo=" . $id_combo;
    $list_combo = pdo_query_one($sql);
    return $list_combo;
}
