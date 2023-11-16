<?php
function insert_contact($name, $email, $title, $content)
{
    $sql = "INSERT INTO contact (name, email, title, content) VALUES ('$name', '$email', '$title', '$content')";
    pdo_execute($sql);
}
