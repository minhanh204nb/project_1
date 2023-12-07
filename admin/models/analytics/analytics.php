<?php
function total_bill()
{
    $sql = "SELECT COUNT(id_bill) AS total_rows FROM bill";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_rows'];
}

function total_account()
{
    $sql = "SELECT COUNT(id_account) AS total_rows FROM account";
    $list_sum_account = pdo_query_one($sql);
    return $list_sum_account['total_rows'];
}

function total_price_bill()
{
    $sql = "SELECT SUM(total_price) AS total_price FROM bill";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_price'];
}

function total_price_bill_where_action($action)
{
    $sql = "SELECT SUM(total_price) AS total_price FROM bill WHERE action !='$action'";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_price'];
}
function total_price_bill_where_action_ok($action)
{
    $sql = "SELECT SUM(total_price) AS total_price FROM bill WHERE action ='$action'";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_price'];
}
function total_bill_action_ok($action)
{
    $sql = "SELECT COUNT(id_bill) AS total_rows FROM bill WHERE action ='$action'";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_rows'];
}

function total_bill_action($action)
{
    $sql = "SELECT COUNT(id_bill) AS total_rows FROM bill WHERE action !='$action'";
    $list_sum_bill = pdo_query_one($sql);
    return $list_sum_bill['total_rows'];
}
