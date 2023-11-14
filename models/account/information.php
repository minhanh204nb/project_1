<?php
function insert_information($name_clinet, $phone_number, $email, $address)
{
    $sql = "INSERT INTO information (name_clinet, phone_number, email, address) VALUES ('$name_clinet', '$phone_number', '$email', '$address')";
    pdo_execute($sql);
}
