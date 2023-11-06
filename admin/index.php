<?php
include './models/pdo.php';
include './models/category.php';
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
            include './controllers/category/insert_category.php';
            break;
        case 'movie':
            break;
        case 'room':
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
