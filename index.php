<?php
include './models/pdo.php';
include './layout/head.php';
include './layout/header.php';
include './layout/navbar.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            break;
        case 'update':
            break;
        default:
            break;
    }
} else {
    include './views/list_movie.php';
}
include './layout/footer.php';
