<?php
function insert_movie($name_movie, $content, $id_country, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action)
{
    $sql = "INSERT INTO movie (name_movie, content, id_country, year, time, reviews, author, performer, age_limit, image, trailer_movie, id_category, action) VALUES ('$name_movie', '$content', '$id_country','$year', '$time', '$reviews', '$author', '$performer', '$age_limit', '$image','$trailer_movie', '$id_category', '$action')";
    pdo_execute($sql);
}
function update_movie($id_movie, $name_movie, $content, $id_country, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action)
{

    if ($image != "")
        $sql = "UPDATE movie SET name_movie='$name_movie',content='$content',id_country='$id_country',year='$year',time='$time',reviews='$reviews',author='$author',performer='$performer',age_limit='$age_limit',image='$image' ,trailer_movie='$trailer_movie',id_category='$id_category' ,action='$action' WHERE id_movie=" . $id_movie;
    else
        $sql = "UPDATE movie SET name_movie='$name_movie',content='$content',id_country='$id_country',year='$year',time='$time',reviews='$reviews',author='$author',performer='$performer',age_limit='$age_limit',trailer_movie='$trailer_movie',id_category='$id_category' ,action='$action' WHERE id_movie=" . $id_movie;
    pdo_execute($sql);
}
function delete_movie($id_movie)
{

    $sql = "DELETE FROM movie WHERE id_movie = " . $_GET['id'];
    pdo_execute($sql);
}

function loadall_movie()
{
    $sql = "SELECT * FROM movie order by id_movie desc";
    $list_movie = pdo_query($sql);
    return $list_movie;
}



function loadlimit_movie($number)
{
    $sql = "SELECT * FROM movie order by id_movie desc limit $number";
    $list_movie = pdo_query($sql);
    return $list_movie;
}

function loadone_movie($id_movie)
{
    $sql = "SELECT * FROM movie WHERE id_movie = '$id_movie'";
    return pdo_query_one($sql);
}



function search_movie($keysword = "", $id_category)
{
    $sql = "select * from movie where 1";
    if ($keysword != "") {
        $sql .= " and name_movie like '%" . $keysword . "%'";
    }
    if ($id_category > 0) {
        $sql .= " and id$id_category ='" . $id_category . "'";
    }
    $sql .= " order by id_movie desc";
    $list_movie = pdo_query($sql);
    return $list_movie;
}





function loadall_year()
{
    $sql = "SELECT year FROM movie";
    return pdo_query($sql);
}






function load_movie_same_category($id_movie, $id_category)
{
    $sql = "select * from movie where id_category=" . $id_category . " AND id_movie <> " . $id_movie;
    $list_movie_same_category = pdo_query($sql);
    return $list_movie_same_category;
}

function load_movie_same_category_limit($id_movie, $id_category)
{
    $sql = "SELECT * FROM movie WHERE id_category = '$id_category' AND id_movie <> '$id_movie' LIMIT 4";
    // $sql="select * from movie where id_category=".$id_category." AND id_movie <> ".$id_movie;
    $list_movie_same_category = pdo_query($sql);
    return $list_movie_same_category;
}
