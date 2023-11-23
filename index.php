<?php
session_start();
ob_start();
include './models/pdo.php';
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
            include './views/combo.php';
            break;
        case 'booking':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id_movie = $_GET['id'];
                $list_movie = loadone_movie($id_movie);
                $loadone_showtime = loadone_showtime_by_id_movie($id_movie);

                if (isset($_POST['redirect']) && $_POST['redirect']) {
                    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                    $vnp_Returnurl = "http://localhost:3000/vnpay_php/vnpay_return.php";
                    $vnp_TmnCode = "I1MTCNW2"; //Mã website tại VNPAY 
                    $vnp_HashSecret = "ZNYPUJPSPWRUNOVZKYDJLOEKVWNTVMGH"; //Chuỗi bí mật

                    $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                    $vnp_OrderInfo = $_POST['order_desc'];
                    $vnp_OrderType = $_POST['order_type'];
                    $vnp_Amount = $_POST['amount'] * 100;
                    $vnp_Locale = $_POST['language'];
                    $vnp_BankCode = $_POST['bank_code'];
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                    // Add Params of 2.0.1 Version
                    $vnp_ExpireDate = $_POST['txtexpire'];
                    // Billing
                    $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
                    $vnp_Bill_Email = $_POST['txt_billing_email'];
                    $fullName = trim($_POST['txt_billing_fullname']);
                    if (isset($fullName) && trim($fullName) != '') {
                        $name = explode(' ', $fullName);
                        $vnp_Bill_FirstName = array_shift($name);
                        $vnp_Bill_LastName = array_pop($name);
                    }
                    $vnp_Bill_Address = $_POST['txt_inv_addr1'];
                    $vnp_Bill_City = $_POST['txt_bill_city'];
                    $vnp_Bill_Country = $_POST['txt_bill_country'];
                    $vnp_Bill_State = $_POST['txt_bill_state'];
                    // Invoice
                    $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
                    $vnp_Inv_Email = $_POST['txt_inv_email'];
                    $vnp_Inv_Customer = $_POST['txt_inv_customer'];
                    $vnp_Inv_Address = $_POST['txt_inv_addr1'];
                    $vnp_Inv_Company = $_POST['txt_inv_company'];
                    $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
                    $vnp_Inv_Type = $_POST['cbo_inv_type'];

                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => uniqid(), // Use uniqid() for a unique transaction reference
                        "vnp_ExpireDate" => $vnp_ExpireDate,
                        "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
                        "vnp_Bill_Email" => $vnp_Bill_Email,
                        "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
                        "vnp_Bill_LastName" => $vnp_Bill_LastName,
                        "vnp_Bill_Address" => $vnp_Bill_Address,
                        "vnp_Bill_City" => $vnp_Bill_City,
                        "vnp_Bill_Country" => $vnp_Bill_Country,
                        "vnp_Inv_Phone" => $vnp_Inv_Phone,
                        "vnp_Inv_Email" => $vnp_Inv_Email,
                        "vnp_Inv_Customer" => $vnp_Inv_Customer,
                        "vnp_Inv_Address" => $vnp_Inv_Address,
                        "vnp_Inv_Company" => $vnp_Inv_Company,
                        "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
                        "vnp_Inv_Type" => $vnp_Inv_Type
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }
                    if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                        $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                    }

                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }

                    $returnData = array(
                        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                    );

                    if (isset($_POST['redirect'])) {
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                }
            }

            // No need to load $loadone_showtime again, as you've already loaded it above

            $list_all_movie = loadall_movie();
            $list_combo = loadall_combo();
            $list_room = loadall_room();
            $list_movie = loadone_movie($id_movie);

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
            include './views/your_tickets.php';
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
