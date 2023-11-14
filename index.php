<?php
include './models/pdo.php';
include './models/account/signup.php';
include './layout/head.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
<<<<<<< HEAD
    if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot')  {
=======
    if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
>>>>>>> 8da99ca2feccbeee2094e79be680ba86ee61d9e7
        include './layout/navbar.php';
    }
    switch ($action) {
        case 'home':
            include './layout/header.php';
            include './views/home.php';
            break;
        case 'list_movie':
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
<<<<<<< HEAD
if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin'and $action !== 'forgot') {
=======
if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
>>>>>>> 8da99ca2feccbeee2094e79be680ba86ee61d9e7
    include './layout/footer.php';
}
