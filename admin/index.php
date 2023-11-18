<?php
session_start();
ob_start();
include './models/pdo.php';
include './models/category/category.php';
include './models/movie/movie.php';
include './models/movie/country.php';
include './models/account/account.php';
include './layouts/head.php';
include './layouts/navbar.php';
include './layouts/sidebar.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'dashboard':
            include './views/total_list.php';
            include './views/analytics.php';
            break;
        case 'category':
            $list_category = loadall_category();
            include './views/category/list_category.php';
            break;
        case 'insert_category':
            if (isset($_POST['insert_category']) && $_POST['insert_category']) {
                $name = $_POST['name_category'];
                insert_category($name);
            }
            include './controllers/category/insert_category.php';
            break;
        case 'delete_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // Delete the category by calling the delete_category function
                delete_category($_GET['id']);
            }
            // Reload the list of categories after deletion
            $sql = "select * from category order by id_category";
            $list_category = pdo_query($sql);
            include './views/category/list_category.php';
            break;

        case 'edit_category':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list_category = loadone_category($_GET['id']);
            }
            include './controllers/category/update_category.php';
            break;
        case 'update_category':
            if (isset($_POST['update_category']) && ($_POST['update_category'])) {
                $name_category = $_POST['name_category'];
                $id_category = $_POST['id_category'];
                update_category($id_category, $name_category);
            }
            $sql = "select * from category order by id_category";
            $list_category = pdo_query($sql);
            include './views/category/list_category.php';
            break;
        case 'movie':
            $list_country = loadall_country();
            $list_category = loadall_category();
            $list_movie = loadall_movie();
            include './views/movie/list_movie.php';
            break;
        case 'insert_movie':
            if (isset($_POST['insert']) && ($_POST['insert'])) {
                $name_movie = $_POST['name_movie'];
                $content = $_POST['content'];
                $country = $_POST['id_country'];
                $year = $_POST['year'];
                $time = $_POST['time'];
                $reviews = $_POST['reviews'];
                $author = $_POST['author'];
                $performer = $_POST['performer'];
                $age_limit = $_POST['age_limit'];
                $trailer_movie = $_POST['trailer_movie'];
                $id_category = $_POST['id_category'];
                $action = $_POST['action'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($image);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // move_uploaded_file:di chuyển tệp đã tải lên đến đích mới
                } else {
                }
                insert_movie($name_movie, $content, $id_category, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action);
            }
            $list_country = loadall_country();
            $list_category = loadall_category();
            // $list_movie = loadall_movie();
            include './controllers/movie/insert_movie.php';
            break;
        case 'delete_movie':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // Delete the movie by calling the delete_movie function
                delete_movie($_GET['id']);
            }
            $list_country = loadall_country();
            $list_category = loadall_category();
            $list_movie = loadall_movie();
            include './views/movie/list_movie.php';
            break;
        case 'edit_movie':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list_movie = loadone_movie($_GET['id']);
            }
            $list_country = loadall_country();
            $list_category = loadall_category();
            // $list_movie = loadall_movie();
            include './controllers/movie/update_movie.php';
            break;
        case 'update_movie':
            if (isset($_POST['update_movie']) && ($_POST['update_movie'])) {
                $id_movie = $_POST['id_movie'];
                $name_movie = $_POST['name_movie'];
                $content = $_POST['content'];
                $id_country = $_POST['id_country']; // Fix variable name here
                $year = $_POST['year'];
                $time = $_POST['time'];
                $reviews = $_POST['reviews'];
                $author = $_POST['author'];
                $performer = $_POST['performer'];
                $age_limit = $_POST['age_limit'];
                $trailer_movie = $_POST['trailer_movie'];
                $id_category = $_POST['id_category'];
                $action = $_POST['action'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($image);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // File upload successful
                } else {
                    // Handle file upload error
                }
                // $movie_to_edit = loadone_movie($_GET['id']);
                update_movie($id_movie, $name_movie, $content, $id_country, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action);
            }
            // $list_country = loadall_country();
            // $list_category = loadall_category();
            $list_movie = loadall_movie();
            include './views/movie/list_movie.php';
            break;
        case 'account':
            $list_account = loadall_account();
            include './views/account/list_account.php';
            break;
        case 'insert_account':
            if (isset($_POST['insert']) && $_POST['insert']) {
                $name_clinet = $_POST['name_clinet'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $action = $_POST['action'];
                $role = $_POST['role'];
                insert_account($name_clinet, $user, $password, $phone_number, $email, $address, $action, $role);
            }
            include './controllers/account/insert_account.php';
            break;
        case 'delete_account':
            if (isset($_GET['id']) && ($_GET['id'] >= 0)) {
                // Delete the movie by calling the delete_movie function
                delete_account($_GET['id']);
            }
            $list_account = loadall_account();
            include './views/account/list_account.php';
            break;
        case 'edit_account':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list_account = loadone_account($_GET['id']);
            }
            include './controllers/account/update_account.php';
            break;
        case 'update_account':
            if (isset($_POST['update_account']) && ($_POST['update_account'])) {
                $id_account = $_GET['id_account'];
                $name_clinet = $_POST['name_clinet'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $action = $_POST['action'];
                $role = $_POST['role'];
                update_account($id_account, $name_clinet, $user, $password, $phone_number, $email, $address, $action, $role);
            }
            $list_account = loadall_account();
            include './views/account/list_account.php';
            break;
        case 'logout':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            break;
        default:
            break;
    }
} else {
    include './views/total_list.php';
    include './views/analytics.php';
}
