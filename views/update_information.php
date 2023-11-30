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
        }

        .form__btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                <div class="row">
                    <form action="#" class="form form--profile">
                        <div class="row row--form">
                            <div class="col-12">
                                <h4 class="form__title">CHI TIẾT TÀI KHOẢN</h4>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="firstname">TÊN NGƯỜI DÙNG</label>
                                    <input id="firstname" type="text" name="firstname" class="form__input" value="Minh Anh">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="email">EMAIL</label>
                                    <input id="email" type="text" name="email" class="form__input" readonly value="email@email.com">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="username">TÊN TÀI KHOẢN</label>
                                    <input id="username" type="text" name="user" class="form__input" value="user" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">SỐ ĐIỆN THOẠI</label>
                                    <input id="lastname" type="text" name="address" class="form__input" value="+84">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">ĐỊA CHỈ</label>
                                    <input id="lastname" type="text" name="address" class="form__input" value="HN">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="form__group">
                                    <label class="form__label" for="lastname">Password</label>
                                    <input id="lastname" type="tel" name="address" class="form__input" value="123">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="form__btn" type="button">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>