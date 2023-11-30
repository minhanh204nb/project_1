<?php
function insert_comment($name_user, $id_movie, $content)
{
    $sql = "INSERT INTO comment (name_user,id_movie, content) VALUES ('$name_user','$id_movie','$content')";
    pdo_execute($sql);
}
function load_comment_by_id_movie($id_movie)
{
    $sql = "SELECT * FROM comment WHERE id_movie = '$id_movie'";
    $list_comment = pdo_query($sql);
    return $list_comment;
}
