<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $GLOBALS['domainPage'] ?>/public/css/client/pages/account/account.css">

</head>

<body>
    <div class="account__wrapper">
        <div class="form__wrapper">
            <form class="form__login" action="">
                <h2 class="form__title">Xác Minh Tài Khoản</h2>
                <div class="form__group">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email">
                    <p class="error"></p>
                </div>
                <div class="form__group">
                    <label for="">Nhập mã xác minh được gửi đến email</label>
                    <input type="" placeholder="Mã Xác Minh">
                    <p class="error"></p>

                </div>
                <button class="btn__login">Đăng nhập</button>
                <a class="forgot__pass" href="<?= $GLOBALS['domainPage'] ?>">Trang chủ</a>
            </form>
       
            <div class="overlay_container">
                <div class="overlay-login">
                    <div class="isInfoRegis">
                        <h2 class="overlay-title">Bạn chưa nhận được mã xác minh từ email gửi đến ?</h2>
                        <p class="overlay-sub"> Vui Lòng gửi lại  !</p>
                        <button class="overlay-btn regisJs">Gửi Lại </button>
                    </div>
                </div>

            </div>
        </div>
    </div>