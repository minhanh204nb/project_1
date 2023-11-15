<?php
include './models/pdo.php';
include './admin/models/category/category.php';
include './admin/models/movie/country.php';
include './admin/models/movie/movie.php';
include './models/account/signup.php';
include './layout/head.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
        include './layout/navbar.php';
    }
    switch ($action) {
        case 'home':
            $list_category=loadall_category();
            $list_country=loadall_country();
            $list_movie = loadall_movie();
            include './layout/header.php';
            include './views/home.php';
            break;
        case 'list_movie':
            $list_movie = loadall_movie();
            include './views/list_movie.php';
            break;
        case 'details_movie':
            include './views/details_movie.php';
            break;
        case 'blog':
            include './views/blog.php';
            break;
        case 'details_blog':
            include './views/details_blog.php';
            break;
        case 'contacts':
            include './views/contacts.php';
            break;
        case 'combo':
            include './views/combo.php';
            break;
        case 'booking':
            include './views/booking.php';
            break;
        case 'signin':
            include './auth/signin.php';
            break;
        case 'signup':
            include './auth/signup.php';
            break;
        case 'forgot':
            include './auth/forgot.php';
            break;
        default:
            // include './views/home.php';
            break;
    }
} else {
    include './layout/navbar.php';
    include './layout/header.php';
    include './views/home.php';
}
if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
    include './layout/footer.php';
}
