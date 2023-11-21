<?php
function loadall_country()
{
    $sql = "SELECT * FROM country order by id_country desc";
    $list_country = pdo_query($sql);
    return $list_country;
}
function loadone_country($id_country)
{
    $sql = "SELECT * FROM country WHERE id_country = $id_country";
    return pdo_query_one($sql);
}
