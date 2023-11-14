<?php
function loadall_country()
{
    $sql = "SELECT * FROM country order by id_country desc";
    $list_country = pdo_query($sql);
    return $list_country;
}
