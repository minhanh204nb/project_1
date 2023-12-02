<?php
session_start();
// ob_start();
// extract($_SESSION['user']);
// if ($role !== '1') {
//     header('location:../index.php?action=home');
// }
include './models/pdo.php';
include './models/category/category.php';
include './models/movie/movie.php';
include './models/movie/country.php';
include './models/account/account.php';
include './models/room/room.php';
include './models/combo/combo.php';
include './models/showtime/showtime.php';
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
            // Category
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
                $id_category = $_GET['id'];
                delete_category($id_category);
            }
            // Reload the list of categories after deletion
            // $sql = "select * from category order by id_category";
            // $list_category = pdo_query($sql);
            $list_category = loadall_category();
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
            // End category

            // Room
        case 'room':
            $list_room = loadall_room();
            include './views/room/list_room.php';
            break;

        case 'insert_room':
            if (isset($_POST['insert_room']) && $_POST['insert_room']) {
                $name = $_POST['name_room'];
                $action_room = $_POST['action_room'];
                insert_room($name, $action_room);
            }
            include './controllers/room/insert_room.php';
            break;
        case 'delete_room':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // Delete the category by calling the delete_category function
                delete_room($_GET['id']);
            }
            // Reload the list of categories after deletion
            $sql = "select * from room order by id_room";
            $list_room = pdo_query($sql);
            include './views/room/list_room.php';
            break;
        case 'edit_room':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list_room = loadone_room($_GET['id']);
            }
            include './controllers/room/update_room.php';
            break;
        case 'update_room':
            if (isset($_POST['update_room']) && ($_POST['update_room'])) {
                $name_room = $_POST['name_room'];
                $id_room = $_POST['id_room'];
                $action_room = $_POST['action_room'];
                update_room($id_room, $name_room, $action_room);
            }
            $sql = "select * from room order by id_room";
            $list_room = pdo_query($sql);
            include './views/room/list_room.php';
            break;
            // End Room

            // Combo
        case 'combo':
            $list_combo = loadall_combo();
            include './views/combo/list_combo.php';
            break;

        case 'insert_combo':
            if (isset($_POST['insert_combo']) && $_POST['insert_combo']) {
                $name = $_POST['name_combo'];
                $img_combo = $_FILES['img_combo']['name'];
                $price_combo = $_POST['price_combo'];
                $mota = $_POST['mota'];
                $target_dir = "../uploads/combo/";
                $target_file = $target_dir . basename($_FILES['img_combo']['name']);
                if (move_uploaded_file($_FILES['img_combo']['tmp_name'], $target_file)) {
                    // move_uploaded_file:di chuyển tệp đã tải lên đến đích mới
                } else {
                }
                insert_combo($name, $img_combo, $price_combo, $mota);
            }
            include './controllers/combo/insert_combo.php';
            break;
        case 'delete_combo':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                // Delete the category by calling the delete_category function
                delete_combo($_GET['id']);
            }
            // Reload the list of categories after deletion
            $sql = "select * from combo order by id_combo";
            $list_combo = pdo_query($sql);
            include './views/combo/list_combo.php';
            break;
        case 'edit_combo':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $list_combo = loadone_combo($_GET['id']);
            }
            include './controllers/combo/update_combo.php';
            break;
        case 'update_combo':
            if (isset($_POST['update_combo']) && ($_POST['update_combo'])) {
                $name_combo = $_POST['name_combo'];
                $img_combo = $_FILES['img_combo']['name'];
                $price_combo = $_POST['price_combo'];
                $mota = $_POST['mota'];
                $id_combo = $_POST['id_combo'];
                $target_dir = "../uploads/combo/";
                $target_file = $target_dir . basename($_FILES['img_combo']['name']);
                if (move_uploaded_file($_FILES['img_combo']['tmp_name'], $target_file)) {
                    // move_uploaded_file:di chuyển tệp đã tải lên đến đích mới
                } else {
                }
                update_combo($id_combo, $name_combo, $img_combo, $price_combo, $mota);
            }
            $sql = "select * from combo order by id_combo";
            $list_combo = pdo_query($sql);
            include './views/combo/list_combo.php';
            break;
            // END COMBO

            // SHOW TIME
        case 'showtime':
            $list_movie = loadall_movie();
            $list_room = loadall_room();
            $list_showtime = loadall_showtime();
            $list_action = loadall_action();
            include './views/showtime/list_showtime.php';
            break;
        case 'insert_showtime':
            if (isset($_POST['insert_showtime']) && $_POST['insert_showtime']) {
                $room = $_POST['id_room'];
                $movie = $_POST['id_movie'];
                $show_date = $_POST['show_date'];
                $start_time = $_POST['start_time'];
                $end_time = $_POST['end_time'];
                $action = $_POST['id_action'];
                insert_showtime($room, $movie, $show_date, $start_time, $end_time, $action);
            }
            $list_movie = loadall_movie();
            $list_room = loadall_room();
            $list_showtime = loadall_showtime();
            $list_action = loadall_action();
            include './controllers/showtime/insert_showtime.php';
            break;

        case 'delete_showtime':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
               
                delete_showtime($_GET['id']);
            }
       
            $sql = "select * from showtime order by id_showtime";
            $list_movie = loadall_movie();
            $list_room = loadall_room();
            $list_showtime = loadall_showtime();
            $list_action = loadall_action();
            $list_showtime = pdo_query($sql);
            include './views/showtime/list_showtime.php';
            break;

            case 'edit_showtime':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $list_showtime = loadone_showtime($_GET['id']);
                }
                $list_movie = loadall_movie();
            $list_room = loadall_room();
            $list_showtime = loadall_showtime();
            $list_action = loadall_action();
                // $list_movie = loadall_movie();
                include './controllers/showtime/update_showtime.php';
                break;

        case 'update_showtime':
            if (isset($_POST['update_showtime']) && ($_POST['update_showtime'])) {
                $room = $_POST['id_room'];
                $movie = $_POST['id_movie'];
                $show_date = $_POST['show_date'];
                $start_time = $_POST['start_time'];
                $end_time = $_POST['end_time'];
                $action = $_POST['id_action'];
                $id_showtime = $_POST['id_showtime'];
                update_showtime($id_showtime, $room, $movie, $show_date, $start_time, $end_time, $action);
            }

            

            $list_movie = loadall_movie();
            $list_room = loadall_room();
            $list_showtime = loadall_showtime();
            $list_action = loadall_action();
            include './views/showtime/list_showtime.php';
            break;
            // END SHOWTIME

            // Movie
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
                $target_dir = "../uploads/movie/";
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
                $target_dir = "../uploads/movie/";
                $target_file = $target_dir . basename($image);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    // File upload successful
                } else {
                    // Handle file upload error
                }
                // $movie_to_edit = loadone_movie($_GET['id']);
                update_movie($id_movie, $name_movie, $content, $id_country, $year, $time, $reviews, $author, $performer, $age_limit, $image, $trailer_movie, $id_category, $action);
            }
            $list_country = loadall_country();
            $list_category = loadall_category();
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
        case 'tickets':
            break;
        case 'logout':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
                header('Location: ../index.php?action=home');
            }
            break;
        default:
            break;
    }
} else {
    include './views/total_list.php';
    include './views/analytics.php';
}
