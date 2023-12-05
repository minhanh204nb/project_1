<?php
function insert_contact($name, $email, $title, $content)
{
    $sql = "INSERT INTO contact (name, email, title, content) VALUES ('$name', '$email', '$title', '$content')";
    pdo_execute($sql);
}
function loadall_contact()
{
    $sql = "SELECT * FROM contact";
    $list_contact = pdo_query($sql);
    return $list_contact;
}
function delete_contact($id_contact)
{
    $sql = "DELETE FROM contact WHERE id_contact='$id_contact'";
    pdo_execute($sql);
}
function update_contact($id_contact, $name, $email, $title, $content)
{
    $sql = "UPDATE contact SET name='$name', email='$email', title='$title', content='$content' WHERE id_contact='$id_contact'";
    pdo_execute($sql);
}

function loadone_contact($id_contact)
{
    $sql = "SELECT * from contact where id_contact=" . $id_contact;
    $list_contact = pdo_query_one($sql);
    return $list_contact;
}
