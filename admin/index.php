<?php
include './models/pdo.php';
include './models/category/category.php';
include './models/movie/movie.php';
include './models/movie/country.php';
include './models/room.php';
// include './controllers/room/insert_room.php';
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
            include './views/list_category.php';
            break;
        case 'insert_category':
            if (isset($_POST['insert_category']) && $_POST['insert_category']) {
                $name = $_POST['name_category'];
                insert_category($name);
            }
            include './controllers/category/insert_category.php';
            break;
        case 'delete_category':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id_category = $_GET['id'];
                delete_category($id_category);
            }
            $list_category = loadall_category();
            include './views/list_category.php';
            break;
        case 'room':
            $listroom = listroom();
            include './views/list_room.php';
            break;
        case 'insert_room':
            if (isset($_POST['btn'])) {
                $name_room = $_POST['name_room'];
                $action = $_POST['trangthai'];
                insert_room($name_room, $action);
                header('location:?action=room');
            }
            include './controllers/room/insert_room.php';
            break;

            case 'delete_room':
                if (isset($_GET['id_room'])) {
                  
                    delete_room($_GET['id_room']);
                }
                $listroom = listroom();
                include './views/list_room.php';
                break;

      
        case 'seats':
            break;
        case 'tickets':
            break;
        default:
            break;
    }
} else {
    include './views/total_list.php';
    include './views/analytics.php';
}
