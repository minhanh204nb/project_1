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
            $list_category = loadall_category();
            $list_country = loadall_country();
            $list_movie_limit = loadlimit_movie(4);
            $list_movie = loadall_movie();
            include './layout/header.php';
            include './views/home.php';
            break;
        case 'list_movie':
            $list_category = loadall_category();
            $list_movie = loadall_movie();
            include './views/list_movie.php';
            break;
        case 'details_movie':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_movie = $_GET['id'];
                $list_movie = loadone_movie($id_movie);
            }
            $list_category = loadall_category();
            $list_country = loadall_country();
            include './views/details_movie.php';
            break;
        case 'search':

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
            if (isset($_POST['signup']) && $_POST['signup']) {
                $name_clinet = $_POST['name_clinet'];
                $email = $_POST['email'];
                $tell = $_POST['tell'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                foreach ($list_info as $info) {
                    if($name_clinet == $info['name_clinet']) {
                        $name_clinet = $info['id_clinet'];
                    }
                }
                insert_information($name_clinet, $email, $tell, '');
                insert_account($user, $password, $name_clinet);
            }
            $list_info = loadall_info();
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
    $list_category = loadall_category();
    $list_country = loadall_country();
    $list_movie_limit = loadlimit_movie(4);
    $list_movie = loadall_movie();
    include './layout/navbar.php';
    include './layout/header.php';
    include './views/home.php';
}
if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
    include './layout/footer.php';
}
