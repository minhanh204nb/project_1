<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form--profile {
            max-width: 800px;
            margin: 0 auto;
        }

        .form__title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .form__group {
            margin-bottom: 20px;
        }

        .form__label {
            font-size: 16px;
            color: #333;
        }

        .form__input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 10px; /* Added margin bottom for spacing */
        }

        .form__btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Remove underline from anchor */
        }

        .form__btn:hover {
            background-color: #0056b3;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically */
        }

        a.form__btn {
            background-color: #ccc;
            color: #333;
            text-align: center;
        }
    </style>
</head>
</head>
<?php
session_start();
extract($_SESSION['user']);
?>
<?php include './admin/models/account/account.php'; ?>

<body>
    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                <div class="row">
                    <form action="/index.php?action=information" method="POST" class="form form--profile">
                        <div class="row row--form">
                            <div class="col-12">
                                <h4 class="form__title">CHI TIẾT TÀI KHOẢN</h4>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="firstname">TÊN NGƯỜI DÙNG</label>
                                    <input id="firstname" type="text" name="name_clinet" class="form__input" value="<?php echo $name_clinet ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="username">TÊN TÀI KHOẢN</label>
                                    <input type="text" name="user" class="form__input" value="<?php echo $user ?>" readonly>
                                    <input type="text" hidden name="id_account" class="form__input" value="<?php echo $id_account ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="email">EMAIL</label>
                                    <input id="email" type="text" name="email" class="form__input" required readonly value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">SỐ ĐIỆN THOẠI</label>
                                    <input id="lastname" type="text" name="phone_number" class="form__input" required value="<?php echo $phone_number ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">ĐỊA CHỈ</label>
                                    <input id="lastname" type="text" name="address" class="form__input" required value="<?php echo $address ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <!-- <label class="form__label" for="lastname">ROLE</label> -->
                                    <input id="lastname" hidden type="text" name="role" class="form__input" value="<?php echo $role ?>">
                                    <input id="lastname" hidden type="text" name="action" class="form__input" value="<?php echo $action ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <!-- <label class="form__label" for="lastname">Password</label> -->
                                    <input id="lastname" hidden type="tel" name="password" class="form__input" value="">
                                </div>
                            </div>
                            <div class="col-12 flex">
                                <input class="form__btn" type="submit" name="update_account" value="CẬP NHẬT">
                                <a href="/index.php?action=information" class="form__btn">QUAY LẠI</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<style>
    .flex {
        display: flex;
        justify-content: space-between;
    }

    a {
        text-decoration: none;
    }
</style>