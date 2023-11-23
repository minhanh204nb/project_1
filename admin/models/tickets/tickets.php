<?php
function loadall_tickets()
{
    $sql = "SELECT * FROM ticket order by id_ticket";
    $list_tickets = pdo_query($sql);
    return $list_tickets;
}

function loadone_ticket($id_showtime)
{
    $sql = "SELECT * FROM ticket WHERE id_showtime";
    $loadone_ticket = pdo_query_one($sql);
    return $loadone_ticket;
}
