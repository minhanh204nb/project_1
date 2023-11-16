<?php
function insert_movie($name_movie, $content, $id_country, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action)
{
    $sql = "INSERT INTO movie (name_movie, content, id_country, year, time, reviews, author, performer, age_limit, image, trailer_movie, id_category, action) VALUES ('$name_movie', '$content', '$id_country','$year', '$time', '$reviews', '$author', '$performer', '$age_limit', '$image','$trailer_movie', '$id_category', '$action')";
    pdo_execute($sql);
}
function delete_movie($id_movie)
{

    $sql = "DELETE FROM movie WHERE id_movie = :id_movie";
    pdo_execute($sql);
}

function loadall_movie()
{
    $sql = "SELECT * FROM movie order by id_movie desc";
    $list_movie = pdo_query($sql);
    return $list_movie;
}
function update_movie($id_movie, $name_movie, $content)
{
}


function loadlimit_movie($number)
{
    $sql = "SELECT * FROM movie order by id_movie desc limit $number";
    $list_movie = pdo_query($sql);
    return $list_movie;
}

function loadone_movie($id_movie)
{
    $sql = "SELECT * FROM movie WHERE id_movie = :id_movie";
    return pdo_query_one($sql);
}
