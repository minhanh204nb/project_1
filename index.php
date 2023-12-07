<?php
session_start();
ob_start();
extract($_SESSION['user']);
if ($role === '1') {
    header('location:../admin/index.php?action=dashboard');
}
include './admin/models/pdo.php';
include './layout/head.php';
include './layout/navbar.php';
include './admin/models/account/account.php';
include './admin/models/movie/movie.php';
include './admin/models/category/category.php';
include './admin/models/movie/country.php';
include './admin/models/room/room.php';
include './admin/models/combo/combo.php';
include './admin/models/tickets/tickets.php';
include './admin/models/showtime/showtime.php';
include './admin/models/contact/contact.php';
include './admin/models/bill/bill.php';
include './admin/models/vnpay/vnpay.php';
include './admin/models/seats/seat.php';
include './admin/models/comment/comment.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            // if ($role === '1') {
            //     header('location:../admin/index.php?action=dashboard');
            //     exit();
            // }
            $list_category = loadall_category();
            $list_country = loadall_country();
            $list_movie_limit = loadlimit_movie(4);
            $list_movie = loadall_movie();
            include './layout/header.php';
            include './views/home.php';
            break;
        case 'list_movie':
            if (isset($_POST['same_category']) && $_POST['same_category']) {
                $id_category = isset($_POST['same_category']) ? $_POST['same_category'] : 2;
                $list_same_category = load_movie_same_category('1', $id_category);
            }
            $list_category = loadall_category();
            $list_movie = loadall_movie();
            include './views/list_movie.php';
            break;
        case 'details_movie':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_movie = $_GET['id'];
                $list_movie = loadone_movie($id_movie);
                $id_category = isset($_POST['same_category']) ? $_POST['same_category'] : 1;
                $list_same_category = load_movie_same_category_limit($id_movie, $id_category);
                $list_comment = load_comment_by_id_movie($id_movie);
            }
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                if (isset($_SESSION['user'])) {
                    $name_user = $_POST['name_user'];
                    $id_movie_comment = $_POST['id_movie'];
                    $content = $_POST['content'];
                    insert_comment($name_user, $id_movie_comment, $content);
                    header('refresh :0.1');
                } else {
                    header('Location: index.php?action=signin');
                }
            }
            $list_all_movie = loadall_movie();
            $list_movie = loadone_movie($id_movie);
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
            $list_category = loadall_category();
            include './views/search.php';
            break;
        case 'blog':
            include './views/blog.php';
            break;
        case 'details_blog':
            include './views/details_blog.php';
            break;
        case 'combo':
            $list_combo = loadall_combo();
            include './views/combo.php';
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
                    echo ' <script> alert("Tài khoàn hoặc mật khẩu không đúng"); </script> ';
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
        case 'information':
            if (isset($_POST['update_account']) && $_POST['update_account']) {
                $id_account = $_POST['id_account'];
                $name_clinet = $_POST['name_clinet'];
                $user = $_POST['user'];
                // $password = $_POST['password'];
                $phone_number = $_POST['phone_number'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $action = $_POST['action'];
                $role = $_POST['role'];
                update_account($id_account, $name_clinet, $user, $password, $phone_number, $email, $address, $action, $role);
                echo ' <script> alert("Đổi thông tin thành công vui lòng đăng nhập lại"); </script> ';
                unset($_SESSION['user']);
                header('refresh :0.1');
                // $_SESSION['user'] = $user;
                // session_start();
            }
            if (isset($_POST['update_password']) && $_POST['update_password']) {
                $id_account = $_POST['id_account'];
                $password = $_POST['password'];
                $current_password = $_POST['current_password'];
                $new_password = $_POST['new_password'];
                if ($current_password === $password) {
                    update_password($id_account, $new_password);
                    echo ' <script> alert("Đổi mật khẩu thành công vui lòng đăng nhập lại"); </script> ';
                    unset($_SESSION['user']);
                    header('refresh :0.1');
                    // header('location: index.php');
                } else {
                    echo ' <script> alert("Đổi mật khẩu không thành công"); </script> ';
                }
            }
            // $load_account = loadone_account($id_account);
            include './views/information.php';
            break;
        case 'bookingHistory':
            $list_bill = loadbill_by_id_account($id_account);
            // $list_bill_by_id_account = loadbill_by_id_account($id_account);
            include './views/bookingHistory.php';
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
        case 'booking':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_movie = $_GET['id'];
                $list_movie = loadone_movie($id_movie);
                $loadone_showtime = loadone_showtime_by_id_movie($id_movie);
            }
            $id_movie = $_GET['id'];
            $list_movie = loadone_movie($id_movie);
            $list_seat = load_seat_by_id_movie($id_movie);
            $list_showtime = loadone_showtime_by_id_movie($id_movie);
            // $list_seat = loadall_seat();
            include './views/booking.php';
            break;
        case 'insert_vnpay':
            if (isset($_POST['insert_vnpay']) && $_POST['insert_vnpay']) {
                $vnp_Amount = $_POST['vnp_Amount'];
                $vnp_BankCode = $_POST['vnp_BankCode'];
                $vnp_BankTranNo = $_POST['vnp_BankTranNo'];
                $vnp_CardType = $_POST['vnp_CardType'];
                $vnp_OrderInfo = $_POST['vnp_OrderInfo'];
                $vnp_PayDate = $_POST['vnp_PayDate'];
                $vnp_ResponseCode = $_POST['vnp_ResponseCode'];
                $vnp_TmnCode = $_POST['vnp_TmnCode'];
                $vnp_TransactionNo = $_POST['vnp_TransactionNo'];
                $vnp_TransactionStatus = $_POST['vnp_TransactionStatus'];
                $vnp_TxnRef = $_POST['vnp_TxnRef'];
                $vnp_SecureHash = $_POST['vnp_SecureHash'];
                // bill
                $id_account = $_POST['id_account'];
                $vnp_TxnRef = $_POST['vnp_TxnRef'];
                $price_tickets = $_POST['tickets'];
                $price_combo = $_POST['combos'];
                $name_movie = $_POST['name_movie'];
                $cinema = $_POST['cinema'];
                $room = $_POST['room'];
                $seats = $_POST['seats'];
                $show_day = $_POST['month'];
                $showtime = $_POST['hours'];
                $id_movie = $_POST['id_movie'];
                $total_price = $_POST['amount'];
                insert_seat($id_movie, '15', $seats);
                insert_bill($id_account, $vnp_TxnRef, $price_tickets, $price_combo, $name_movie, $cinema, $room, $seats, $show_day, $showtime, $total_price);
                insert_vnpay($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_ResponseCode, $vnp_TmnCode, $vnp_TransactionNo, $vnp_TransactionStatus, $vnp_TxnRef, $vnp_SecureHash);
                header('location: index.php?action=bookingHistory');
            }
            break;
        default:
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

include './layout/footer.php';
