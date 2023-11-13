<?php
function insert_movie($name_movie, $content, $id_country, $year, $time, $riviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action)
{
    $sql = "INSERT INTO movie (name_movie, content, id_country, year, time, rviews, author, performer, age_limit, image, trailer_movie, id_category, action) VALUES ('$name_movie', '$content', '$id_country','$year', '$time', '$riviews', '$author', '$performer', '$age_limit', '$image','$trailer_movie', '$id_category', '$action')";
    pdo_execute($sql);
}
function delete_movie($id_movie)
{
    $sql = "DELETE FROM movie WHERE id_movie = '$id_movie'";
    pdo_execute($sql);
}
