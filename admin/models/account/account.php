<?php
function loadall_account()
{
    $sql = "SELECT * FROM account ORDER BY id_account";
    $list_account = pdo_query($sql);
    return $list_account;
}
function insert_account($name_clinet, $user, $password, $phone_number, $email, $address, $action, $role)
{
    $sql = "INSERT INTO account ( name_clinet, user, password, phone_number, email, address,action,role) VALUES ('$name_clinet', '$user', '$password', '$phone_number', '$email', '$address', '$action','$role')";
    pdo_execute($sql);
}

function update_account($id_account, $name_clinet, $user, $password, $phone_number, $email, $address, $action, $role)
{
    $sql = "UPDATE account SET name_clinet = '$name_clinet',user='$user',password='$password',phone_number='$phone_number', email = '$email', address = '$address',action='$action', role = '$role ' WHERE id_account = '$id_account'";
    pdo_execute($sql);
}
function update_password($id_account, $password)
{
    $sql = "UPDATE account SET password = '$password' WHERE id_account = '$id_account'";
    pdo_execute($sql);
}
function delete_account($id_account)
{
    $sql = "DELETE FROM account WHERE id_account = '$id_account'";
    pdo_execute($sql);
}
function loadone_account($id_account)
{
    $sql = "SELECT * from account where id_account=" . $id_account;
    $list_account = pdo_query_one($sql);
    return $list_account;
}
function check_user($user, $password)
{
    $sql = "select * from account where user='" . $user . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
