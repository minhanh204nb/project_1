<?php
include './models/pdo.php';
include './models/category.php';
include './models/room.php';
include './models/movie.php';
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
                $tenphong = $_POST['name_room'];
                $trangthai = $_POST['trangthai'];
                insert_room($tenphong, $trangthai);
                // header('location:?action=room');
            }
            // include './controllers/room/add_room.php';

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
