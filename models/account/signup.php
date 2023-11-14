<?php
function insert_account($user, $pass, $id_info)
{
    $sql = "INSERT INTO account (user, pass, id_info) VALUES ('$user', '$pass', '$id_info')";
    pdo_execute($sql);
}
