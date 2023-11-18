<?php
session_start();
ob_start();
include './models/pdo.php';
include './admin/models/category/category.php';
include './admin/models/movie/country.php';
include './admin/models/movie/movie.php';
include './admin/models/contact/contact.php';
include './admin/models/account/account.php';
include './layout/head.php';
include './layout/navbar.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    // if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !==  'forgot') {
    //     include './layout/navbar.php';
    // }
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
            if (isset($_POST['keysword']) && ($_POST['keysword'] != "")) {
                $keysword = $_POST['keysword'];
            } else {
                $keysword = "";
            }
            if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                $id_category = $_GET['id_category'];
            } else {
                $id_category = 0;
            }
            $list_movie = search_movie($keysword, $id_category);
            include './views/search.php';
            break;
        case 'blog':
            include './views/blog.php';
            break;
        case 'details_blog':
            include './views/details_blog.php';
            break;
        case 'combo':
            include './views/combo.php';
            break;
        case 'booking':
            include './views/booking.php';
            break;
        case 'signup':
            if (isset($_POST['signup']) && $_POST['signup']) {
                $name_clinet = $_POST['name_clinet'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $action = $_POST['action'];
                $role = $_POST['role'];
                insert_account($name_clinet, $user, $password, $phone_number, $email, $address, $action, $role);
                header('location:index.php?action=signin');
            }
            include './auth/signup.php';
            break;
        case 'signin':
            if (isset($_POST['signin']) && ($_POST['signin'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $check_user = check_user($user, $password);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    echo ' <script> alert("Đăng nhập thành công"); </script> ';
                    header('location:index.php?action=home');
                } else {
                    echo ' <script> alert("Tài khoàn không tồn tại"); </script> ';
                }
            }
            $list_account = loadall_account();
            include './auth/signin.php';
            break;
        case 'logout':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
                header('location: index.php?action=home');
            }
            break;
        case 'forgot':
            include './auth/forgot.php';
            break;
        case 'your_ticket':
            break;
        case 'contact':
            if (isset($_POST['send']) && $_POST['send']) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $title = $_POST['title'];
                $content = $_POST['content'];
                insert_contact($name, $email, $title, $content);
            }
            include './views/contacts.php';
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
    // include './layout/navbar.php';
    include './layout/header.php';
    include './views/home.php';
}
// if ($action !== 'booking' and $action !== 'signup' and $action !== 'signin' and $action !== 'forgot') {
//     include './layout/footer.php';
// }
include './layout/footer.php';
