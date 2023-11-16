<?php
function insert_information($name_clinet, $phone_number, $email, $address)
{
    $sql = "INSERT INTO information (name_clinet, phone_number, email, address) VALUES ('$name_clinet', '$phone_number', '$email', '$address')";
    pdo_execute($sql);
}
function loadall_info()
{
    $sql = "SELECT * FROM information order by name_clinet";
    $list_info = pdo_query($sql);
    return $list_info;
}
